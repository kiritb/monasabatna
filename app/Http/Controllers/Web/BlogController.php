<?php

namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Constants\HttpStatusCodesConsts;
use App\Http\Helpers\ResponseUtil;
use App\Http\Helpers\BlogHelper;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlogs()
    {
        try {
            $blogsData = BlogHelper::getBlogs();

            if (empty($blogsData)) {
                $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['No Data Found']], HttpStatusCodesConsts::HTTP_NOT_FOUND, 'No Data Found');

                return view('static/blogs')->with('data', $responseArr);
            }

            return view('static/blogs')->with('data', $blogsData);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return view('static/blogs')->with('data', $responseArr);
        }
    }

    public function postBlog(Request $request)
    {
        $requestParams = $request->all();

        $rules = [
                    'user_id' => 'required',
                    'blog' => 'required',
                    'heading' => 'required',
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

        $userData = current(Users::select('email')
                            ->where('id', $requestParams['user_id'])
                            ->where('status', 1)
                            ->get()
                            ->toArray()
                    );

        if (empty($userData)) {
            \Log::info(__CLASS__.' '.__FUNCTION__.' Error Message User not found Response Code '.HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['User Not Found']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
        }

        try {
            $requestParams['email'] = $userData['email'];

            BlogHelper::postBlog($requestParams);

            return response(ResponseUtil::buildSuccessResponse(['message' => 'Successfully created a blog']), HttpStatusCodesConsts::HTTP_CREATED);
        } catch (\Exception $e) {
            $responseArr = ResponseUtil::buildErrorResponse(['errors' => [HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING]], HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
