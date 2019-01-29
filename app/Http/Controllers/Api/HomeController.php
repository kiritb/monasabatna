<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\HomeHelper;
use App\Http\Helpers\CustomerQueryHelper;
use App\Http\Helpers\FacilitateCustomerHelper;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * generates a access Key in order to access Api.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $homePageData = HomeHelper::buildHomePageData();

            return response(ResponseUtil::buildSuccessResponse($homePageData), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * get image.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getImage(Request $request)
    {
        return response(ResponseUtil::buildSuccessResponse(['http://18.218.133.17/svg/images/theme-banner5.jpg', 'http://18.218.133.17/svg/images/venues-pic2.jpg']), HttpStatusCodesConsts::HTTP_OK);
    }

    /**
     * get image.
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

        return response(ResponseUtil::buildSuccessResponse($aboutUsArr), HttpStatusCodesConsts::HTTP_OK);
    }

    /**
     * get image.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function whyUs(Request $request)
    {
        $aboutUsArr = [
                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also
                        the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum",

                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also
                        the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum",

                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also
                        the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum",

                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also
                        the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum",
                    ];

        return response(ResponseUtil::buildSuccessResponse($aboutUsArr), HttpStatusCodesConsts::HTTP_OK);
    }

    public function contactUs(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
                    'first_name' => 'required|string|max:255|',
                    'email' => 'required|string|email|max:255|',
                    'message' => 'required|string',
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
            customerQueryHelper::createCustomerQuery($requestParams);

            return response(ResponseUtil::buildSuccessResponse(['message' => 'Thank you for contacting us, our representative will contact you shortly']), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
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

        if ($validator->fails()) {
            $errorMessages = current($validator->messages());
            
            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.current($value).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {
            FacilitateCustomerHelper::FacilitateCustomerService($requestParams);

            return response(ResponseUtil::buildSuccessResponse(['message' =>'Thank you for contacting us, our representative will contact you shortly']), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}