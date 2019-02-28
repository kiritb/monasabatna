<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

class Curl
{
    /**
     * Curl Call 
     * @param $httpMethod
     * @param $params
     * @param $url - optional
     * @return Array
    */
    public static function makeCurlCall( $httpMethod, $params, $url , $returnTransfer = 1)
    {
        $ch = curl_init();



        if ($httpMethod == 'DELETE')
        {
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        }
         
        if ($httpMethod == 'GET')
        {
          $url = sprintf("%s?%s", $url, http_build_query($params));
        }
         
        if ($httpMethod == 'POST')
        {
          curl_setopt($ch, CURLOPT_POST, TRUE);
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        }
         
        if ($httpMethod == 'PUT')
        {
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        }

        \Log::info(__CLASS__." ".__FUNCTION__." Url ".$url );

        curl_setopt($ch,CURLOPT_URL,$url);
        
        if($returnTransfer)
        {
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
        }
        else
        {
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
        }
        

        // Connection Time Out KEPT 2 seconds
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        $output = curl_exec($ch);
        
        if(curl_error($ch))
        {  

            \Log::info(__CLASS__." ".__FUNCTION__." Curl Error : " . curl_error($ch) );
            
            throw new Exception("Error Processing Curl Request", 1);
            
        }
        
        \Log::info(__CLASS__." ".__FUNCTION__." Response ".$output );

        curl_close($ch);

        return $output;
    }
   
}
