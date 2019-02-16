<?php

namespace App\Http\Controllers\Auth;

use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\UserHelper;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Constants\SmsTypeConst;

use App\Models\Phones;
use JWTAuth;

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

            if(empty(current( $phoneData) ) )
            {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message Customer does not exists ');

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['user not found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'UserNotFoundException');

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

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
            } else 
            {
                if (! $token = JWTAuth::attempt($credentials)) 
                {
                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['wrong password']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'noUserFoundException');
                    
                    return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
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

            $token = $request->header('Authorization');

            JWTAuth::invalidate($token);

            return response(ResponseUtil::buildSuccessResponse(['message' => 'User successfully logged out.']),
                HttpStatusCodesConsts::HTTP_OK);
        } catch (JWTException $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));

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
    public function webLogout()
    {
        try {
            \Auth::logout();

            return response(ResponseUtil::buildSuccessResponse(['message' => 'User successfully logged out.']),
                HttpStatusCodesConsts::HTTP_OK);
        } catch (JWTException $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));

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
    public function getUserDetails($id)
    {
        try {
            $userData = UserHelper::getUserDetails($id);

            if (empty($userData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($userData), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {

            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));
            
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
    public function updateUserDetails(Request $request, $id)
    {   
        $requestParams = $request->all();

        try {

            if(empty($requestParams))
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Request payload cannot be empty']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

            $userDetails = UserHelper::emailByUserId($id);
            
            if(empty($userDetails))
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No User Details Found']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

            \DB::beginTransaction();

            $phoneData = isset($requestParams['phones']) ? $requestParams['phones'] : [];

            unset($requestParams['phones']);

            $requestParams['updated_by'] = $userDetails['email'];

            $userData = UserHelper::updateUser( $id, $requestParams );

            if( !empty($phoneData) )
            {   

                Phones::where('linkable_id',$id)
                        ->where('linkable_type','users')
                        ->update(['status' => 0,'updated_by'=>$userDetails['email'] ] );

                foreach ($phoneData as $key => $value) {
                    
                    $value['linkable_id']   = $id;

                    $value['linkable_type'] = 'users';

                    $value['email'] = $userDetails['email'];

                    phones::createPhones( $value ) ;
                }
            }

            \DB::commit();

            return response(ResponseUtil::buildSuccessResponse(['message' => 'User details successfully updated.']), HttpStatusCodesConsts::HTTP_OK);

        } catch (\Exception $e) {

            \DB::rollBack();

            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));
            
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /*
     * forgotPassword
     * send an otp
     *
     * @param Request $request 'header'
     */
    public function forgotPassword(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
            'phone' => 'required',
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
            
            $validatePhone = UserHelper::getUserByDefaultPhone($requestParams['phone']);


            if (empty($validatePhone)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No User Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            

            $smsText = 'Use this One time pass password ~SMS_OTP~ to reset your password . Valid till ~VALIDITY~';

            $otpData = UserHelper::sendOtp($validatePhone[0]['linkable_id'], $requestParams['phone'],SmsTypeConst::SMS_TYPE_ACCOUNT_FORGOT_PASSWORD, $smsText);

            if(empty($otpData))
            {
                 $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No User Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($otpData), HttpStatusCodesConsts::HTTP_OK);

        } catch (\Exception $e) {

            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));
            
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /** 
    * update Password
    * @param  Illuminate Request
    *
    */
    public function updatePassword(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
            'otp'       => 'required',
            'type'      => 'required',
            'user_id'   => 'required|exists:users,id',
            'password'  => 'required|string||min:6|confirmed',
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

        try
        {  
            if (UserHelper::validateOtp($requestParams['otp'], $requestParams['user_id'], $requestParams['otp_type'] ) ) 
            {
                UserHelper::updateUser($requestParams['user_id'],['password' => \Hash::make($requestParams['password']) ] );

                return response(ResponseUtil::buildSuccessResponse(['message' => 'successfully updated the password']), HttpStatusCodesConsts::HTTP_OK);
            }
            else
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Invalid Otp']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
            
        }
        catch (\Exception $e) {

            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));
            
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function validateOtp(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Request Params =>' . print_r($requestParams, true));

        $rules = [  'otp'           => 'required|integer',
                    'user_id'       => 'required|integer',
                    'otp_type'      => 'required|integer',
        ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) {
            $errorMessages = current($validator->messages());
            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . current($value) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {
            if (UserHelper::validateOtp($requestParams['otp'], $requestParams['user_id'], $requestParams['otp_type'] ) ) 
            {
                return response(['message'=>'Otp Successfully validated'], HttpStatusCodesConsts::HTTP_OK);
            } else {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Invalid Otp']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    


    /** 
    * update Password
    * @param  Illuminate Request
    *
    */
    public function resetPassword(Request $request )
    {
        $requestParams = $request->all();

        $rules = [
            'user_id'           => 'required|exists:users,id',
            'old_password'      => 'required',
            'password'          => 'required|string||min:6|confirmed',
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

        try
        {   
            
            if( UserHelper::validatePassword($requestParams['user_id'], $requestParams['old_password']) )
            {
                UserHelper::updateUser($requestParams['user_id'], ['password' => \Hash::make($requestParams['password'] ) ] );

                return response(ResponseUtil::buildSuccessResponse(['message' => 'successfully updated the password']), HttpStatusCodesConsts::HTTP_OK);
            }
            else
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Invalid Old Password']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }

        }
        catch (\Exception $e) {

            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured '.print_r($e->getMessage(), true));
            
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


     /**
     * update vendor
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addProfileImage(Request $request, $id)
    {
        $requestParams = $request->all();

        $maxSize = 8 * 1024;

        $rules = [
          
            'image_upload_file'         => 'required|mimes:jpeg,jpg,png,pjpeg|max:' . $maxSize,
        ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) 
        {
            $errorMessages = current($validator->messages());

            foreach ($errorMessages as $key => $value) 
            {
                \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . current($value) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {

            $imageObject    = $request->file('image_upload_file');

            $fileName       = $imageObject->getClientOriginalName();

            $fileMimeType   = $imageObject->getClientMimeType();

            $filePath = env('APP_URL') . '/storage/app/public/users/' . $fileName;

            \Storage::disk('public')->putFileAs('users/', $imageObject, $fileName);

            $updateData = ['linkable_id' => $id, 'linkable_type' => 'users', 'file_path' => $filePath, 'file_type' => 'user_image', 'file_extension' => $fileMimeType];
            
            $res = UserHelper::upsertUserImage($id, $updateData);

            if(!$res)
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No User Details Found']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_NOT_FOUND_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);   
            }

            return response(ResponseUtil::buildSuccessResponse( ['successfully uploaded profile image'] ), HttpStatusCodesConsts::HTTP_CREATED);

        } catch (\Exception $e) {

            \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . print_r($e->getMessage(), true) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
