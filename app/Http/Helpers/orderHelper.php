<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Orders;
use App\Http\Helpers\VennueHelper;


class orderHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function createOrder( $userId, $linkableId, $linkableType, $bookingFromDate, $bookingToDate )
    {   
        $returnArr = [];

        if( ! self::checkAvailability( $linkableId, $linkableType, $bookingFromDate, $bookingToDate ) )
        {

            $returnArr['success'] = false;
            $returnArr['message'] = 'sold out on selected dates';
            $returnArr['data']    = [];

            return $returnArr ; 
        }

        try
        {   
            switch ($linkableType) 
            {
                case 'vennues':
                    
                    break;
                case 'upcoming_events':
                    'code to be executed if n=label2';
                    break;
                case 'label3':
                    'code to be executed if n=label3';
                    break;
                default:
                    'code to be executed if n is different from all labels';
            }

            // $reviewsDetails = Reviews::select('review_comment', 'rating','users.first_name', 'users.family_name','files.file_path as fileUrl')
            //                         ->join('users', 'users.id', '=', 'reviews.user_id')
            //                         ->leftJoin('files', 'files.linkable_id', '=', 'users.id')
            //                         ->where('files.linkable_type', 'users')
            //                         ->where('users.status', 1)
            //                         ->where('files.status', 1)
            //                         ->where('reviews.status', 1)
            //                         ->where('reviews.is_approved', 1)
            //                         ->where('reviews.linkable_id', $linkableId)
            //                         ->where('reviews.linkable_type', $linkableType)
            //                         ->get()
            //                         ->toArray();

            return [];
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Reviews", 1);

        }
       
    }

    /**
     * @param integer $linkableId
     * @param string $linkableType
     * @param date $bookingFromDate
     * @param date $bookingToDate
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function checkAvailability($linkableId, $linkableType, $bookingFromDate, $bookingToDate )
    {   
        try
        {
            $res = current(Orders::select('id')
                            ->where('linkable_id', $linkableId)
                            ->where('linkable_id', $linkableId)
                            ->where('booking_from_date','>=', $bookingFromDate )
                            ->where('booking_to_date','<=', $bookingToDate )
                            ->limt(1)
                            ->get()
                            ->toArray()
                   );
            
            if(empty( $res ) )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(\Exception $e)
        {
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Checking Date availability ".print_r( $e->getMessage(), true) );  
            
            throw new \Exception(" Exception Occured while Checking Date availability ", 1); 
        }
        
    }
    
}
