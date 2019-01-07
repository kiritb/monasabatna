<?php

namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use Illuminate\Http\Request;
use App\Models\Faqs;

class FaqController extends Controller
{
    /**
     * generates a getFaqs.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFaqs(Request $request)
    {
        try {
            $faqData = Faqs::select('question', 'answer')
                                ->where('status', 1)
                                ->orderBy('order_no', 'asc')
                                ->get()
                                ->toArray();

            if (empty($faqData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return view('faqs')->with('error', $responseArr);
            }

            return view('faqs')->with('data', $faqData);
        } catch (\Exception $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Exception =>'.print_r($e->getMessage(), true));

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('faqs')->with('error', $responseArr);
        }
    }
}
