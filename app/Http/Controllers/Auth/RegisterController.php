<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\UserHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function createUser(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        $rules       = [  'email'           => 'required|string|email|max:255|unique:users', 
                          'first_name'      => 'required|string||max:255|',
                          'fathers_name'    =>  'required|string||max:255|',
                          'family_name'       =>  'required|string||max:255|',
                          'password'        =>  'required|string||min:6|confirmed'
                       ];

        $validator   = Validator::make( $requestParams, $rules );

        if ($validator->fails())
        {
            $errorMessages = current( $validator->messages() );
            foreach ($errorMessages as $key => $value)
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Error Message ".current($value)." Response Code ". HttpStatusCodesConsts::HTTP_BAD_REQUEST );

                $responseArr = ResponseUtil::buildErrorResponse( [ 'errors' => [ current($value) ] ], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST );
            }
        }

        try
        {
            $userData = UserHelper::registerUser( $requestParams );

            return response( ResponseUtil::buildSuccessResponse($userData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
    }

    public function verifyotp(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        $rules       = [  'otp'             => 'required|integer', 
                          'user_id'         => 'required|integer'
                       ];

        $validator   = Validator::make( $requestParams, $rules );

        if ($validator->fails())
        {
            $errorMessages = current( $validator->messages() );
            foreach ($errorMessages as $key => $value)
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Error Message ".current($value)." Response Code ". HttpStatusCodesConsts::HTTP_BAD_REQUEST );

                $responseArr = ResponseUtil::buildErrorResponse( [ 'errors' => [ current($value) ] ], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST );
            }
        }

        try
        {
            if ( UserHelper::verifyotp( $requestParams['otp'], $requestParams['user_id'] ) )
            {
              return response([],HttpStatusCodesConsts::HTTP_OK );  
            }
            else
            {
              $responseArr = ResponseUtil::buildErrorResponse( ['errors' => ['Invalid Otp'] ], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_BAD_REQUEST);

              return response( $responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST );
            }

            
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
    }

    
}
