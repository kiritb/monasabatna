<?php

namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use Illuminate\Support\Facades\Validator;

class AccessKeyController extends Controller
{
    /**
     * generates a access Key in order to access Api.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateAccessKey(Request $request)
    {
        $requestParams = $request->all();

        \Log::info(__CLASS__.' '.__FUNCTION__.' Request Params =>'.print_r($requestParams, true));

        $rules = ['code' => 'required|string|min:3|max:3|', 'secret_key' => 'required|string|min:16|max:16|'];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) {
            $errorMessages = current($validator->messages());
            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.current($value).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['error' => current($value)], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }
    }
}
