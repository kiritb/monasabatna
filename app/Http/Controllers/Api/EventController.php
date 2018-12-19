<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\EventHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EventController extends Controller
{
   
    /**
     * 
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function eventListing( Request $request )
   {    
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        try
        {
            $vennueListingData = EventHelper::eventListing();

            return response( ResponseUtil::buildSuccessResponse($vennueListingData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

   /**
     * 
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function getEventOrgainsersList( Request $request )
   {    
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        try
        {
            $eventOrgainsersListData = EventHelper::eventOrgainsersList();

            return response( ResponseUtil::buildSuccessResponse($eventOrgainsersListData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

   /**
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function getEventOrgainserDetails( $id , Request $request)
   {    
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        try
        {
            $eventOrgainserData = EventHelper::getEventOrgainserDetails( $id );

            return response( ResponseUtil::buildSuccessResponse($eventOrgainserData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

   /**
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function getThemeDetails( $id , Request $request)
   {    
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        try
        {
            $themeData = EventHelper::getThemeDetails( $id );

            return response( ResponseUtil::buildSuccessResponse($themeData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

   
   
}
