<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\orderHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    /**
     * generates a list of vennues 
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function createOrder( Request $request )
   {    
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );
       
        $maxSize = 8 * 1024;

        $rules       = [  
                          'first_name'          => 'required|string', 
                          'fathers_name'        => 'required|string',
                          'family_name'         => 'required|string',
                          'country_code'        => 'required|string',
                          'phone_no'            => 'required|integer',
                          'email'               => 'required|string|email|max:255',
                          'id_proof'            => 'required|mimes:jpeg,jpg,png,pjpeg,pdf|max:' . $maxSize,
                          'booking_from_date'   => 'required|string',
                          'booking_to_date'     => 'required|string',
                          'is_partial_payment'  => 'required',
                          'no_of_guests'        => 'required|integer',
                          'self_booking'        => 'required',
                          'linkable_id'         => 'required|integer',
                          'linkable_type'       => 'required|string'
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

        $guestsArr    = [];

        if($requestParams['self_booking'])
        {
          $rules       = [  
                          'guest_first_name'          => 'required|string', 
                          'guest_fathers_name'        => 'required|string',
                          'guest_family_name'         => 'required|string',
                       ];

          $guestsArr   = [ 'guest_first_name'   => $requestParams['guest_first_name'], 
                           'guest_fathers_name' => $requestParams['guest_fathers_name'], 
                           'guest_first_name'   => $requestParams['guest_first_name']
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

          $guestsArr['guest_country_code']        = isset($requestParams['guest_country_code']) ? $requestParams['guest_country_code'] : NULL;
          
          $guestsArr['guest_phone_no']            = isset($requestParams['guest_phone_no']) ? $requestParams['guest_phone_no'] : NULL;
          
          $guestsArr['guest_email']               = isset($requestParams['guest_email']) ? $requestParams['guest_email'] : NULL;

        }

        try
        {
            $orderData = orderHelper::createOrder( $requestParams, $guestsArr );

            return response( ResponseUtil::buildSuccessResponse($orderData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

  

   
}
