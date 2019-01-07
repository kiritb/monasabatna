<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use JWTAuth;
use DB;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\UserHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo()
    {
        // User role
        $user = Auth::user();

        return '/';
    }

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }

    public function login(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
                    'phone' => 'required',
                    'password' => 'required',
                 ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) {
            $errorMessages = current($validator->messages());
            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.current($value).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {
            $phoneData = UserHelper::getUserByDefaultPhone($requestParams['phone']);

            $userData = DB::table('users')
                         ->where('id', $phoneData[0]['linkable_id'])
                         ->get()
                         ->toArray();

            if (empty($userData)) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message Customer does not exists ');

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['user not found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'UserNotFoundException');

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

            if (!$userData[0]->status) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message Customer is inactive ');

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Customer is inactive']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'UserInactiveException');

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

            if (empty($userData[0]->account_verified_at)) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message Account not verified ');

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['account not verified']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'UserAccountActivationException');

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

            $credentials = ['email' => $userData[0]->email, 'password' => $requestParams['password']];

            if (isset($requestParams['isWeb']) && ($requestParams['isWeb'])) {
                if (!\Auth::attempt($credentials)) {
                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['wrong password']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'noUserFoundException');
                }

                return response(ResponseUtil::buildSuccessResponse(['message' => 'Successfully Logged-in!!']),
HttpStatusCodesConsts::HTTP_OK);
            } else {
                if (!$token = JWTAuth::attempt($credentials)) {
                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['wrong password']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'noUserFoundException');
                }

                return response(ResponseUtil::buildSuccessResponse(['authtoken' => $token]), HttpStatusCodesConsts::HTTP_OK);
            }
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Logout
     * Invalidate the token. User have to relogin to get a new token.
     *
     * @param Request $request 'header'
     */
    public function logout(Request $request)
    {
        try {
            $requestParams = $request->all();

            if (isset($requestParams['isWeb']) && ($requestParams['isWeb'])) {
                \Auth::logout();

                return response(ResponseUtil::buildSuccessResponse(['message' => 'Successfully Logged-out!!']),
                HttpStatusCodesConsts::HTTP_OK);
            } else {
                $token = $request->header('Authorization');

                JWTAuth::invalidate($token);

                return response(ResponseUtil::buildSuccessResponse(['message' => 'User successfully logged out.']),
HttpStatusCodesConsts::HTTP_OK);
            }
        } catch (JWTException $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
