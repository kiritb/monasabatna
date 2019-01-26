<?php

namespace app\Http\Controllers\Web;

use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Controllers\Controller;
use App\Http\Helpers\EventHelper;
use App\Http\Helpers\ResponseUtil;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFilters(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $upcomingFilterData = EventHelper::getEventFilters();

            return response(ResponseUtil::buildSuccessResponse($upcomingFilterData), HttpStatusCodesConsts::HTTP_OK);
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
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function eventListing(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $upcomingEventListingData = EventHelper::eventListing($requestParams);

            if (empty($upcomingEventListingData)) {
                $responseArr = ResponseUtil::buildErrorResponse(
                    ['errors' => ['No Data Found']],
                    HttpStatusCodesConsts::HTTP_NOT_FOUND,
                    'No Data Found'
                );

                return view('dynamicpages/upcomingeventlist')->with('data', $responseArr);
            }

            try {
                $upcomingEventListingData['filters'] = EventHelper::getEventFilters();
            } catch (\Exception $e) {
                $upcomingEventListingData['filters'] = 'Filters not found';
            }

            return view('dynamicpages/upcomingeventlist')->with('data', $upcomingEventListingData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(
                ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]],
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR,
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING
            );

            return view('dynamicpages/upcomingeventlist')->with('data', $responseArr);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEventOrgainsersList(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $eventOrgainsersListData = EventHelper::eventOrgainsersList($requestParams);

            if (empty($eventOrgainsersListData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return view('dynamicpages/eventorganiserslist')->with('data', $responseArr);
            }

            try {
                $eventOrgainsersListData['filters'] = EventHelper::getEventOrganinsersFilters();
            } catch (\Exception $e) {
                $eventOrgainsersListData['filters'] = 'Filters not found';
            }

            return view('dynamicpages/eventorganiserslist')->with('data', $eventOrgainsersListData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('dynamicpages/eventorganiserslist')->with('data', $responseArr);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEventOrgainserDetails($id, Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $eventOrgainserData = EventHelper::getEventOrgainserDetails($id);

            return view('dynamicpages/eventorganiserdetails')->with('data', $eventOrgainserData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(
                ['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]],
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR,
                HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING
            );

            return view('dynamicpages/eventorganiserdetails')->with('data', $responseArr);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPackageDetails($id, Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $themeData = EventHelper::getPackageDetails($id);

            return response(ResponseUtil::buildSuccessResponse($themeData), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function upComingeventDetails($id)
    {
        try {
            $upcomingEventDetailsData = EventHelper::upComingeventDetails($id);

            if (empty($upcomingEventDetailsData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return view('dynamicpages/upcomingeventdetails')->with('data', $responseArr);
            }

            return view('dynamicpages/upcomingeventdetails')->with('data', $upcomingEventDetailsData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('dynamicpages/upcomingeventdetails')->with('data', $responseArr);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSuppliersFilters(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $suppliersFilters = EventHelper::getSuppliersFilters();

            if (empty($suppliersFilters)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($suppliersFilters), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSuppliersList(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $supplierList = EventHelper::getSuppliersList($requestParams);

            if (empty($supplierList)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($supplierList), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param Request $id supplier Id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSupplierDetails($id)
    {
        try {
            $supplierDetails = EventHelper::getSupplierDetails($id);

            if (empty($supplierDetails)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($supplierDetails), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param Request $id supplier Id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSupplierPackageDetails($id)
    {
        try {
            $supplierPackageDetails = EventHelper::getSupplierPackageDetails($id);

            if (empty($supplierPackageDetails)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($supplierPackageDetails), HttpStatusCodesConsts::HTTP_OK);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
