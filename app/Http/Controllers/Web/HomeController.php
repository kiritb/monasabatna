<?php

namespace App\Http\Controllers\Web;

use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\HomeHelper;
use Illuminate\Http\Request;
use App\Http\Helpers\WishListHelper;

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

    public function addWishList(Request $request)
    {
        $requestParams = $request->all();

        $rules = [  
                        'email'             => 'required|string|email|max:255',
                        'linkable_id'       => 'required',
                        'linkable_type'     => 'required',
                        'from_date'         => 'required',
                        'to_date'           => 'required'
                        
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

        if( !in_array($requestParams['linkable_type'] , ['vennues', 'packages']))
        {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message - Only vennues or supplier packages can be added to wish list' .' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Only vennues or supplier packages can be added to wish list']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
        }

        try {

            /* Validate Vennue Id */
            if($requestParams['linkable_type'] == 'vennues')
            {
                if( ! WishListHelper::validateVennue($requestParams['linkable_id']) )
                {
                    \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message - Vennue Id Not Found' .' Response Code '.HttpStatusCodesConsts::HTTP_NOT_FOUND );

                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Vennue Id Not Found'] ], HttpStatusCodesConsts::HTTP_NOT_FOUND, HttpStatusCodesConsts::HTTP_NOT_FOUND_STRING);

                    return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
                }
            }


            /* Validate Vennue Id */
            if($requestParams['linkable_type'] == 'packages')
            {
                if( ! WishListHelper::validateSuppliers($requestParams['linkable_id']) )
                {
                    \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message - Vennue Id Not Found' .' Response Code '.HttpStatusCodesConsts::HTTP_NOT_FOUND);

                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Vennue Id Not Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, HttpStatusCodesConsts::HTTP_NOT_FOUND_STRING);

                    return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
                }
            }

            WishListHelper::addWishList($requestParams);

            return response(ResponseUtil::buildSuccessResponse(['message' =>'Successfully added in the wish list']), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {

            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured =>'.print_r($e->getMessage(), true));

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    public function getWishList(Request $request)
    {
        $requestParams = $request->all();

        $rules = [ 'type'   => 'required' ];

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

            $res = WishListHelper::getWishList($requestParams['type']);

            if (empty($res)) 
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($res), HttpStatusCodesConsts::HTTP_OK);

        } catch (\Exception $e) {

            dd($e->getMessage());
            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured =>'.print_r($e->getMessage(), true));

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getGenericTerms()
    {
        try {
 
            $res = GenericTermsHelper::getTermsData();
            
            if (empty($res)) 
            {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse( $res ), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
