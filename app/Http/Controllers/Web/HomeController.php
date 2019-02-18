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
        //constructor
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //get parametrs from UI
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

    /**
     * get about us data.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function aboutUs(Request $request)
    {
        $aboutUsArr = [
        'aboutUs' => [
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum",

            'filePath' => 'http://18.218.133.17/svg/images/img-about3.jpg',
        ],

        'suppliers' => [
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum",

            'filePath' => 'http://18.218.133.17/svg/images/custprof-supplier.jpg',
        ],

        'eventOrganisers' => [
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum",

            'filePath' => 'http://18.218.133.17/svg/images/custprof-supplier.jpg',
        ],

        'ourTeam' => [
                [
                    'name' => 'John Doe',
                    'designation' => 'Co-Founder',
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum",

                    'filePath' => 'http://18.218.133.17/svg/images/photohead.png',
                ],
                [
                    'name' => 'John Cena',
                    'designation' => 'Ceo',
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum",

                    'filePath' => 'http://18.218.133.17/svg/images/testi-themedetails.png',
                ],
            ],
            'address' => [
                'addressLine_1' => '123,abc Road,Xyz Bulding',
                'addressLine_2' => '2nd Floor',
                'city' => 'Jedah',
                'googleMapLink' => 'https://goo.gl/maps/XNv83vgHXyw',
                'phone' => '+91-535129087',
                'email' => 'monsabatna@care.com',
                'fbLink' => 'https://www.facebook.com/Shake-It-Off-213865949349546/',
                'twitterLink' => 'https://twitter.com/ibonpereztv/status/1069178516028178433',
            ],
        ];

        return view('static/aboutus')->with('data', $aboutUsArr);
    }

    /**
     * Create wish list.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addWishList(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
                        'email' => 'required|string|email|max:255',
                        'linkable_id' => 'required',
                        'linkable_type' => 'required',
                        'from_date' => 'required',
                        'to_date' => 'required',
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

        if (!in_array($requestParams['linkable_type'], ['vennues', 'packages'])) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message - Only vennues or supplier packages can be added to wish list'.' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Only vennues or supplier packages can be added to wish list']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
        }

        try {
            /* Validate Vennue Id */
            if ($requestParams['linkable_type'] == 'vennues') {
                if (!WishListHelper::validateVennue($requestParams['linkable_id'])) {
                    \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message - Vennue Id Not Found'.' Response Code '.HttpStatusCodesConsts::HTTP_NOT_FOUND);

                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Vennue Id Not Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, HttpStatusCodesConsts::HTTP_NOT_FOUND_STRING);

                    return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
                }
            }

            /* Validate Vennue Id */
            if ($requestParams['linkable_type'] == 'packages') {
                if (!WishListHelper::validateSuppliers($requestParams['linkable_id'])) {
                    \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message - Vennue Id Not Found'.' Response Code '.HttpStatusCodesConsts::HTTP_NOT_FOUND);

                    $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Vennue Id Not Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, HttpStatusCodesConsts::HTTP_NOT_FOUND_STRING);

                    return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
                }
            }

            WishListHelper::addWishList($requestParams);

            return response(ResponseUtil::buildSuccessResponse(['message' => 'Successfully added in the wish list']), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception Occured =>'.print_r($e->getMessage(), true));

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * get whishlists.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWishList(Request $request)
    {
        $requestParams = $request->all();

        $rules = ['type' => 'required'];

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

            if (empty($res)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse(['data' => $res]), HttpStatusCodesConsts::HTTP_OK);
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
            
            if (empty($res)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($res), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}