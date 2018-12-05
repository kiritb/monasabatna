<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

class ResponseUtil
{
    /**
     * @param Array  $errorArr
     * @param string $type
     * @param integer $code
     *
     * @return array
     */
    public static function buildErrorResponse( $errorArr, $code , $type)
    {   

        return 
        [
            'error'              => $errorArr,
            'code'               => $code,
            'type'               => $type,
        ];
    }


    /**
     * @param Array  $data
     *
     * @return array
     */
    public static function buildSuccessResponse( $data)
    {   

        return 
        [
            'data' => $data
        ];
    }

}
