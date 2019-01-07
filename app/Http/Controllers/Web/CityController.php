<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use Illuminate\Http\Request;
use App\Models\Cities;

class CityController extends Controller
{
   
    /**
     * generates a list of Cities 
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function getCities( Request $request )
   {    

        try
        {
            $cityData = Cities::select('name')
                                ->where('status', 1)
                                ->get()
                                ->toArray();

            if(empty($cityData) )
            {
                $responseArr = ResponseUtil::buildErrorResponse( ['errors' => ['No Data Found'] ], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND );
            }

            return response( ResponseUtil::buildSuccessResponse( array_column($cityData, 'name') ), HttpStatusCodesConsts::HTTP_OK );
        }
        catch( \Exception $e)
        { 
             \Log::info(__CLASS__.' '.__FUNCTION__.' Exception =>'.print_r($e->getMessage(), true));

              $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
              return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }


   
}
