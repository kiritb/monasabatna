<?php
namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use Illuminate\Http\Request;
use App\Models\AmenitieTypes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AmenitieController extends Controller{

	public function getAmenitieType(){
		try{
			$amenities = AmenitieTypes::getAmenitieTypes();
			$response = $amenities;
			
		}catch(\Exception $e){

			$responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $response = $responseArr;
		}
		return view('vendor-panel/vendoramenities')->with('data', $response);
	}

	public function addAmenitieType(Request $request){

		$requestParams = $request->all();

		$rules = [
					'name' => 'required',
					'description' => 'required'
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

        try{
        	$data['name'] = $requestParams['name'];
        	$data['description'] = $requestParams['description'];

        	$res = AmenitieTypes::createAmenitieTypes($data);

        	return response(ResponseUtil::buildSuccessResponse(['data' => 1]), HttpStatusCodesConsts::HTTP_CREATED);
        }catch (\Exception $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.print_r($e->getMessage(), true).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
	}
}
?>