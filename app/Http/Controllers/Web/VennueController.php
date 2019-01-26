<?php

namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\VennueHelper;
use Illuminate\Http\Request;

class VennueController extends Controller
{
    /**
     * generates a list of vennues.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function vennueListing(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $vennueListingData = VennueHelper::vennueListing($requestParams);

            if (empty($vennueListingData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return view('dynamicpages/venue_list')->with('data', $responseArr);
            }

            try {
                $vennueListingData['filters'] = VennueHelper::vennueFilters();
            } catch (\Exception $e) {
                $vennueListingData['filters'] = 'Filters not found';
            }

            return view('dynamicpages/venue_list')->with('data', $vennueListingData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(
                ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]],
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR,
HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING
            );

            return view('dynamicpages/venue_list')->with('data', $responseArr);
        }
    }

    /**
     * generates getFilters for vennues.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFilters(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $vennueFiltersData = VennueHelper::vennueFilters();

            return response(ResponseUtil::buildSuccessResponse($vennueFiltersData), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(
                ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]],
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR,
HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING
            );

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * detailed list of a vennue.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function venueDetails($vennueId)
    {
        \Log::info(__CLASS__.' '.__FUNCTION__.' Vennue Id =>'.$vennueId);

        try {
            $vennueDetails = VennueHelper::venueDetails($vennueId);

            return view('dynamicpages/venuedetails')->with('data', $vennueDetails);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(
                ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]],
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR,
HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING
            );

            return view('dynamicpages/venuedetails')->with('data', $responseArr);
        }
    }

    /**
     * generates a list of Express Deals.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getExpressDeals(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $vennueListingData = VennueHelper::getExpressDeals();

            return response(ResponseUtil::buildSuccessResponse($vennueListingData), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(
                ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]],
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR,
HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING
            );

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
