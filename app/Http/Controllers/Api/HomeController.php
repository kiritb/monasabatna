<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\HomeHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    /**
     * generates a access Key in order to access Api
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
    */
   public function index( Request $request )
   {    
        $requestParams = $request->all();
        
        \Log::info(__CLASS__." ".__FUNCTION__.' Request Params =>'. print_r($requestParams , true ) );

        try
        {
            $homePageData = HomeHelper::buildHomePageData();

            return response( ResponseUtil::buildSuccessResponse($homePageData), HttpStatusCodesConsts::HTTP_CREATED );
        }
        catch( \Exception $e)
        {
            $responseArr = ResponseUtil::buildErrorResponse( ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING] ], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);
                
                return response( $responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR );
        }
        
   }

}
