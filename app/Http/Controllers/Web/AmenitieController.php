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
			$responseArr['amenities'] = $amenities;
			$response = $responseArr;
			
			
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
            
	        $data['linkable_id'] = $requestParams['name'];
	        $data['short_description'] = $requestParams['description'];
	        $data['email'] = 'haritha@brillmindz.com';
	        $res = AmenitieTypes::createAmenitieTypes($data);
	        $amentie =  response(ResponseUtil::buildSuccessResponse('successfully created'), HttpStatusCodesConsts::HTTP_CREATED);
        	$amenities = AmenitieTypes::getAmenitieTypes();
			$amentie_res['amenities'] = $amenities;
        }catch (\Exception $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.print_r($e->getMessage(), true).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $amentie_res =  response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
        return view('vendor-panel/vendoramenities')->with('data', $amentie_res);
	}
	public function editAmenitieType(Request $request){

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
	        $data['short_description'] = $requestParams['description'];
	        $email = 'haritha@brillmindz.com';
	        $data['created_by'] = 'haritha@brillmindz.com';
            $data['updated_by'] = 'haritha@brillmindz.com';
	        $id = $requestParams['amentie_id'];
	        $res = AmenitieTypes::updateAmenitieTypes($id, $data);
	       $amentie =  response(ResponseUtil::buildSuccessResponse('successfully updated'), HttpStatusCodesConsts::HTTP_CREATED);
        	$amenities = AmenitieTypes::getAmenitieTypes();
			$amentie_res['amenities'] = $amenities;
        	
        }catch (\Exception $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.print_r($e->getMessage(), true).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $amentie_res = response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
         return view('vendor-panel/vendoramenities')->with('data', $amentie_res);
        
	}

	public function deleteAmenitieType(Request $request){
       $requestParams = $request->all();
		
        try{
            
	        $data['status'] = 0;
	        $id = $requestParams['amentie_id'];
	        $res = AmenitieTypes::updateAmenitieTypes($id, $data);
	       $amentie =  response(ResponseUtil::buildSuccessResponse('successfully updated'), HttpStatusCodesConsts::HTTP_CREATED);
        	$amenities = AmenitieTypes::getAmenitieTypes();
			$amentie_res['amenities'] = $amenities;
        	
        }catch (\Exception $e) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message '.print_r($e->getMessage(), true).' Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            $amentie_res = response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
         return view('vendor-panel/vendoramenities')->with('data', $amentie_res);
        
	}
	
}
?>