<?php


namespace app\Http\Middleware;



use Closure;
use Illuminate\Http\Request;

use App\Http\Helpers\ResponseUtil;
use App\Http\Constants\HttpStatusCodesConsts;

use App\Models\Vendors;


class AuthToken
{

    public function handle(Request $request, Closure $next)
    {

        $vendorAccessToken =  isset( $_COOKIE['_vendor'] ) ? $_COOKIE['_vendor'] : NULL;
        
        if(empty($vendorAccessToken))
        {
            
            \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' vendor cookie not set ' . HttpStatusCodesConsts::HTTP_BAD_REQUEST);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['vendor cookie not set']], HttpStatusCodesConsts::HTTP_BAD_REQUEST, HttpStatusCodesConsts::HTTP_MANDATE_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_BAD_REQUEST);
        }

       
        $vendorDetails = Current(Vendors::select('id','email')
                                 ->where('accessToken', $vendorAccessToken)
                                 ->where( 'expiry_date', '>', date('Y-m-d h:i:s'))
                                 ->where('status',1)
                                 ->get()
                                 ->toArray()
                        );
        

        if (empty($vendorDetails) )
        {

            \Log::info(__CLASS__ . ' ' . __FUNCTION__ . ' Access token Expired , Please login again' . HttpStatusCodesConsts::HTTP_UNAUTHORIZED);

            $responseArr = ResponseUtil::buildErrorResponse(['errors' => ['Access token Expired , Please login again']], HttpStatusCodesConsts::HTTP_UNAUTHORIZED, HttpStatusCodesConsts::HTTP_UNAUTHORIZED_STRING);

            return response($responseArr, HttpStatusCodesConsts::HTTP_UNAUTHORIZED);
        }

        $request['id']      = $vendorDetails['id'];
        
        $request['email']   = $vendorDetails['email'];

        return $next($request);
    }

}