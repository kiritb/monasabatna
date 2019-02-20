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

            if (empty($upcomingFilterData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($upcomingFilterData), HttpStatusCodesConsts::HTTP_OK);
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
    public function eventListing(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $upcomingEventListingData = EventHelper::eventListing($requestParams);

            if (empty($upcomingEventListingData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                $returnHTML = view('list_pages.upcomings-list')->with('data', $responseArr);
                $html = $returnHTML->render();

                return response()->json(array('success' => true, 'html' => $html));
            }

            try {
                $upcomingEventListingData['filters'] = EventHelper::getEventFilters();
            } catch (\Exception $e) {
                $upcomingEventListingData['filters'] = 'Filters not found';
            }

            if (isset($requestParams) && count($requestParams) > 0) {
                $upcomingEventListingData['appliedParams'] = $requestParams;
            } else {
                $upcomingEventListingData['appliedParams'] = [];
            }

            $returnHTML = view('list_pages.upcomings-list')->with('data', $upcomingEventListingData);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $returnHTML = view('list_pages.upcomings-list')->with('data', $responseArr);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
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

                return view('detail_pages.upcomingeventdetails')->with('data', $responseArr);
            }

            return view('detail_pages.upcomingeventdetails')->with('data', $upcomingEventDetailsData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('detail_pages.upcomingeventdetails')->with('data', $responseArr);
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEventOrganinsersFilters(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $eventOrganinsersFilters = EventHelper::getEventOrganinsersFilters();

            if (empty($eventOrganinsersFilters)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse($eventOrganinsersFilters), HttpStatusCodesConsts::HTTP_OK);
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
    public function getEventOrgainsersList(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $eventOrgainsersListData = EventHelper::eventOrgainsersList($requestParams);

            if (empty($eventOrgainsersListData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                $returnHTML = view('list_pages.eventorganiser-list')->with('data', $responseArr);
                $html = $returnHTML->render();

                return response()->json(array('success' => true, 'html' => $html));
            }

            try {
                $eventOrgainsersListData['filters'] = EventHelper::getEventOrganinsersFilters();
            } catch (\Exception $e) {
                $eventOrgainsersListData['filters'] = 'Filters not found';
            }

            if (isset($requestParams) && count($requestParams) > 0) {
                $eventOrgainsersListData['appliedParams'] = $requestParams;
            } else {
                $eventOrgainsersListData['appliedParams'] = [];
            }

            $returnHTML = view('list_pages.eventorganiser-list')->with('data', $eventOrgainsersListData);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $returnHTML = view('list_pages.eventorganiser-list')->with('data', $responseArr);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
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

            return view('detail_pages.eventorganiserdetails')->with('data', $eventOrgainserData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('detail_pages.eventorganiserdetails')->with('data', $responseArr);
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

            return view('detail_pages.packageeventsdetails')->with('data', $themeData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('detail_pages.packageeventsdetails')->with('data', $responseArr);
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

                $returnHTML = view('list_pages.supplier-list')->with('data', $responseArr);
                $html = $returnHTML->render();

                return response()->json(array('success' => true, 'html' => $html));
            }

            try {
                $supplierList['filters'] = EventHelper::getSuppliersFilters();
            } catch (\Exception $e) {
                $supplierList['filters'] = 'Filters not found';
            }

            if (isset($requestParams) && count($requestParams) > 0) {
                $supplierList['appliedParams'] = $requestParams;
            } else {
                $supplierList['appliedParams'] = [];
            }

            $returnHTML = view('list_pages.supplier-list')->with('data', $supplierList);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $returnHTML = view('list_pages.supplier-list')->with('data', $responseArr);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
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

                return view('detail_pages.supplierdetails')->with('data', $responseArr);
            }

            return view('detail_pages.supplierdetails')->with('data', $supplierDetails);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('detail_pages.supplierdetails')->with('data', $responseArr);
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

                return view('detail_pages.packagesupplierdetails')->with('data', $responseArr);
            }

            return view('detail_pages.packagesupplierdetails')->with('data', $supplierPackageDetails);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('detail_pages.packagesupplierdetails')->with('data', $responseArr);
        }
    }

    /**
     * @param Request $id supplier Id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPackageSupplierList(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $supplierList = EventHelper::getPackageSupplierList($requestParams);

            if (empty($supplierList)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                $returnHTML = view('list_pages.package-supplier-list')->with('data', $responseArr);
                $html = $returnHTML->render();

                return response()->json(array('success' => true, 'html' => $html));
            }

            try {
                $supplierList['filters'] = EventHelper::getSuppliersFilters();
            } catch (\Exception $e) {
                $supplierList['filters'] = 'Filters not found';
            }

            if (isset($requestParams) && count($requestParams) > 0) {
                $supplierList['appliedParams'] = $requestParams;
            } else {
                $supplierList['appliedParams'] = [];
            }

            $returnHTML = view('list_pages.package-supplier-list')->with('data', $supplierList);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $returnHTML = view('list_pages.package-supplier-list')->with('data', $responseArr);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        }
    }

    /**
     * @param Request $id supplier Id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPackageEventOrganisersList(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        try {
            $eventOrgsList = EventHelper::getPackageEventOrganisersList($requestParams);

            if (empty($eventOrgsList)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                $returnHTML = view('list_pages.package-eventorgs-list')->with('data', $responseArr);
                $html = $returnHTML->render();

                return response()->json(array('success' => true, 'html' => $html));
            }

            try {
                $eventOrgsList['filters'] = EventHelper::getEventOrganinsersFilters();
            } catch (\Exception $e) {
                $eventOrgsList['filters'] = 'Filters not found';
            }

            if (isset($requestParams) && count($requestParams) > 0) {
                $eventOrgsList['appliedParams'] = $requestParams;
            } else {
                $eventOrgsList['appliedParams'] = [];
            }

            $returnHTML = view('list_pages.package-eventorgs-list')->with('data', $eventOrgsList);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $returnHTML = view('list_pages.package-eventorgs-list')->with('data', $responseArr);
            $html = $returnHTML->render();

            return response()->json(array('success' => true, 'html' => $html));
        }
    }
}