<?php

namespace app\Http\Controllers\Api;

use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\VendorHelper;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    /**
     * generates a access Key in order to access Api.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function createVendor(Request $request)
    {
        $requestParams = $request->all();

        $maxSize = 8 * 1024;

        $rules = ['company_name' => 'required',
            'email'                  => 'required|string|email|max:255',
            'password'               => 'required|string||min:6|confirmed',
            'license_no'             => 'required',
            'note'                   => 'required',
            'fb_link'                => 'required',
            'twitter_link'           => 'required',
            'primary_phone_no'       => 'required',
            'secondary_phone_no'     => 'required',
            'alternate_phone_no'     => 'required',
            'address_line_1'         => 'required',
            'google_map_link'        => 'required',
            'city_id'                => 'required',
            'country_id'             => 'required',
            'country_code'           => 'required',
            'id_name'                => 'required',
            'account_name'           => 'required',
            'bank_name'              => 'required',
            'iban_name'              => 'required',
            'account_number'         => 'required',
            'payment_method'         => 'required',
            'license_upload_file'    => 'required|mimes:jpeg,jpg,png,pjpeg,pdf|max:' . $maxSize,
            'id_upload_file'         => 'required|mimes:jpeg,jpg,png,pjpeg,pdf|max:' . $maxSize,
            'logo_upload_file'       => 'required|mimes:jpeg,jpg,png,pjpeg|max:' . $maxSize,

        ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) {
            $errorMessages = current($validator->messages());

            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . current($value) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {

            $fileObjectId = $request->file('id_upload_file');

            $fileNameId = $fileObjectId->getClientOriginalName();

            $mimeTypeIdFile = $fileObjectId->getClientMimeType();

            $destinationPathId = env('APP_URL') . '/storage/vendors/' . $fileNameId;

            $fileObjectLogo = $request->file('logo_upload_file');

            $fileNameLogo = $fileObjectLogo->getClientOriginalName();

            $mimeTypeIdLogo = $fileObjectLogo->getClientMimeType();

            $destinationPathLogo = env('APP_URL') . '/storage/vendors/' . $fileNameLogo;

            $fileObjectLicense = $request->file('license_upload_file');

            $fileNameLicense = $fileObjectLogo->getClientOriginalName();

            $mimeTypeIdLicense = $fileObjectLogo->getClientMimeType();

            $destinationPathLicense = env('APP_URL') . '/storage/vendors/' . $fileNameLicense;

            Storage::disk('public')->putFileAs('vendors/', $fileObjectId, $fileNameId);

            Storage::disk('public')->putFileAs('vendors/', $fileObjectLogo, $fileNameLogo);

            Storage::disk('public')->putFileAs('vendors/', $fileObjectLicense, $fileNameLicense);

            $updateData['vendors']['company_name'] = $requestParams['company_name'];
            $updateData['vendors']['note']         = $requestParams['note'];
            $updateData['vendors']['fb_link']      = $requestParams['fb_link'];
            $updateData['vendors']['twitter_link'] = $requestParams['twitter_link'];
            $updateData['vendors']['email']        = $requestParams['email'];
            $updateData['vendors']['password']     = $requestParams['password'];
            $updateData['vendors']['license_no']   = $requestParams['license_no'];

            $updateData['address']['address_line_1']  = $requestParams['address_line_1'];
            $updateData['address']['address_line_2']  = isset($requestParams['address_line_2']) ? $requestParams['address_line_2'] : null;
            $updateData['address']['google_map_link'] = $requestParams['google_map_link'];
            $updateData['address']['city_id']         = $requestParams['city_id'];
            $updateData['address']['country_id']      = $requestParams['country_id'];

            $updateData['phones']       = [ 
                                            ['country_code' => $requestParams['country_code'],'phone_number' => $requestParams['primary_phone_no'],'is_default' => 1 ],
                                            ['country_code' => $requestParams['country_code'],'phone_number' => $requestParams['secondary_phone_no'],'is_default' => 0 ],
                                            ['country_code' => $requestParams['country_code'],'phone_number' => $requestParams['alternate_phone_no'],'is_default' => 0 ],
                                          ];


            $updateData['files'] = [
                ['file_path' => $destinationPathId, 'file_type' => $requestParams['id_name'], 'file_extension' => $mimeTypeIdFile],
                ['file_path' => $destinationPathLogo, 'file_type' => 'vendor_logo', 'file_extension' => $mimeTypeIdLogo],
                ['file_path' => $destinationPathLicense, 'file_type' => 'vendor_license', 'file_extension' => $mimeTypeIdLicense],

            ];

            $updateData['bank_accounts']['account_name']   = $requestParams['account_name'];
            $updateData['bank_accounts']['bank_name']      = $requestParams['bank_name'];
            $updateData['bank_accounts']['iban_name']      = $requestParams['iban_name'];
            $updateData['bank_accounts']['account_number'] = $requestParams['account_number'];
            $updateData['bank_accounts']['payment_method'] = $requestParams['payment_method'];

            $res = VendorHelper::createVendor($updateData);

            return response(ResponseUtil::buildSuccessResponse( $res ), HttpStatusCodesConsts::HTTP_CREATED);

        } catch (\Exception $e) {

            \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . print_r($e->getMessage(), true) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function login(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
            'email'    => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) {
            $errorMessages = current($validator->messages());
            foreach ($errorMessages as $key => $value) {
                \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . current($value) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {

            $vendorData = VendorHelper::login($requestParams);

            if (empty( $vendorData ) ) {

                \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' No Vendor Details Found ');

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Invalid Credentials']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, 'UserInactiveException');

                return response($responseArr, HttpStatusCodesConsts::HTTP_NOT_FOUND);
            }

            return response(ResponseUtil::buildSuccessResponse([$vendorData]),
                HttpStatusCodesConsts::HTTP_OK);

        } catch (\Exception $e) {

            \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Exception - '.print_r($e->getMessage(), TRUE ) );

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * update vendor
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateVendor(Request $request, $id)
    {
        $requestParams = $request->all();

        $maxSize = 8 * 1024;

        $rules = [
            'company_name'           => 'required',
            'license_no'             => 'required',
            'note'                   => 'required',
            'fb_link'                => 'required',
            'twitter_link'           => 'required',
            'primary_phone_no'       => 'required',
            'secondary_phone_no'     => 'required',
            'alternate_phone_no'     => 'required',
            'address_line_1'         => 'required',
            'google_map_link'        => 'required',
            'city_id'                => 'required',
            'country_id'             => 'required',
            'country_code'           => 'required',
            'id_name'                => 'required',
            'account_name'           => 'required',
            'bank_name'              => 'required',
            'iban_name'              => 'required',
            'account_number'         => 'required',
            'payment_method'         => 'required',
            'license_upload_file'    => 'required|mimes:jpeg,jpg,png,pjpeg,pdf|max:' . $maxSize,
            'id_upload_file'         => 'required|mimes:jpeg,jpg,png,pjpeg,pdf|max:' . $maxSize,
            'logo_upload_file'       => 'required|mimes:jpeg,jpg,png,pjpeg|max:' . $maxSize,

        ];

        $validator = Validator::make($requestParams, $rules);

        if ($validator->fails()) 
        {
            $errorMessages = current($validator->messages());

            foreach ($errorMessages as $key => $value) 
            {
                \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . current($value) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

                $responseArr = ResponseUtil::buildErrorResponse(['errors' => [current($value)]], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

                return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
            }
        }

        try {

            $fileObjectId = $request->file('id_upload_file');

            $fileNameId = $fileObjectId->getClientOriginalName();

            $mimeTypeIdFile = $fileObjectId->getClientMimeType();

            $destinationPathId = env('APP_URL') . '/storage/vendors/' . $fileNameId;

            $fileObjectLogo = $request->file('logo_upload_file');

            $fileNameLogo = $fileObjectLogo->getClientOriginalName();

            $mimeTypeIdLogo = $fileObjectLogo->getClientMimeType();

            $destinationPathLogo = env('APP_URL') . '/storage/vendors/' . $fileNameLogo;

            $fileObjectLicense = $request->file('license_upload_file');

            $fileNameLicense = $fileObjectLogo->getClientOriginalName();

            $mimeTypeIdLicense = $fileObjectLogo->getClientMimeType();

            $destinationPathLicense = env('APP_URL') . '/storage/vendors/' . $fileNameLicense;

            Storage::disk('public')->putFileAs('vendors/', $fileObjectId, $fileNameId);

            Storage::disk('public')->putFileAs('vendors/', $fileObjectLogo, $fileNameLogo);

            Storage::disk('public')->putFileAs('vendors/', $fileObjectLicense, $fileNameLicense);

            $updateData['vendors']['company_name'] = $requestParams['company_name'];
            $updateData['vendors']['note']         = $requestParams['note'];
            $updateData['vendors']['fb_link']      = $requestParams['fb_link'];
            $updateData['vendors']['twitter_link'] = $requestParams['twitter_link'];
            $updateData['vendors']['email']        = $requestParams['email'];
            $updateData['vendors']['password']     = $requestParams['password'];
            $updateData['vendors']['license_no']   = $requestParams['license_no'];

            $updateData['address']['address_line_1']  = $requestParams['address_line_1'];
            $updateData['address']['address_line_2']  = isset($requestParams['address_line_2']) ? $requestParams['address_line_2'] : null;
            $updateData['address']['google_map_link'] = $requestParams['google_map_link'];
            $updateData['address']['city_id']         = $requestParams['city_id'];
            $updateData['address']['country_id']      = $requestParams['country_id'];

            $updateData['phones']       = [ 
                                            ['country_code' => $requestParams['country_code'],'phone_number' => $requestParams['primary_phone_no'],'is_default' => 1 ],
                                            ['country_code' => $requestParams['country_code'],'phone_number' => $requestParams['secondary_phone_no'],'is_default' => 0 ],
                                            ['country_code' => $requestParams['country_code'],'phone_number' => $requestParams['alternate_phone_no'],'is_default' => 0 ],
                                          ];


            $updateData['files'] = [
                ['file_path' => $destinationPathId, 'file_type' => $requestParams['id_name'], 'file_extension' => $mimeTypeIdFile],
                ['file_path' => $destinationPathLogo, 'file_type' => 'vendor_logo', 'file_extension' => $mimeTypeIdLogo],
                ['file_path' => $destinationPathLicense, 'file_type' => 'vendor_license', 'file_extension' => $mimeTypeIdLicense],

            ];

            $updateData['bank_accounts']['account_name']   = $requestParams['account_name'];
            $updateData['bank_accounts']['bank_name']      = $requestParams['bank_name'];
            $updateData['bank_accounts']['iban_name']      = $requestParams['iban_name'];
            $updateData['bank_accounts']['account_number'] = $requestParams['account_number'];
            $updateData['bank_accounts']['payment_method'] = $requestParams['payment_method'];

            $updateVendor['vendors']['email'] = $requestParams['email'];

            $res = VendorHelper::UpdateVendor($updateData);

            return response(ResponseUtil::buildSuccessResponse( $res ), HttpStatusCodesConsts::HTTP_CREATED);

        } catch (\Exception $e) {

            \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Error Message ' . print_r($e->getMessage(), true) . ' Response Code ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
