<?php

namespace App\Http\Controllers\Web;

use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\HomeHelper;
use Illuminate\Http\Request;
use App\Http\Helpers\FacilitateCustomerHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //send data from api
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $homePageData = HomeHelper::buildHomePageData();

            $response = $homePageData;
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $response = $responseArr;
        }

        return view('dynamicpages/home')->with('data', $response);
    }

    public function facilitateService(Request $request)
    {
        $requestParams = $request->all();

        $rules = [      
                        'name'              => 'required',
                        'country_code'      => 'required',
                        'phone_number'      => 'required',
                        'email'             => 'required|string|email|max:255',
                        'event_date'        => 'required',
                        'event_type'        => 'required'
                        
                 ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) 
        {
            $errorMessages = current($validator->messages());
            
            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.current($value).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {
                FacilitateCustomerHelper::FacilitateCustomerService( $requestParams );

                return response(ResponseUtil::buildSuccessResponse(['message' =>'Thank you for contacting us, our representative will contact you shortly']), HttpStatusCodesConsts::HTTP_CREATED);

        } catch (\Exception $e) 
        {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}   
