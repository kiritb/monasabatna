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

        $rules       = [  
                          'user_id'             => 'required|exists:users,id', 
                          'linkable_id'         => 'required|integer',
                          'linkable_type'       => 'required|string',
                          'booking_from_date'   => 'required|string',
                          'booking_to_date'     => 'required|string'
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
            $orderData = orderHelper::createOrder( $userId, $linkableId, $linkableType, $bookingFromDate, $bookingToDate );

            return response( ResponseUtil::buildSuccessResponse($orderData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

   /**
     * detailed list of a vennue
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function checkAvailability( Request $request )
   {    
        
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );


        $rules       = [  
                          'linkable_id'         => 'required|integer',
                          'linkable_type'       => 'required|string',
                          'booking_from_date'   => 'required|string',
                          'booking_to_date'     => 'required|string'
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
            if ( orderHelper::checkAvailability( $vennueId ) )
            {
                return response( [], HttpStatusCodesConsts::HTTP_CREATED );    
            }
            else
            {
                $responseArr = ResponseUtil::buildErrorResponse( [ 'errors' => 'sold out on request date' ], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'sold out on request date');
                
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
