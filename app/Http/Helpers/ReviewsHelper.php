<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Reviews;


class ReviewsHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getReviews( $linkableId, $linkableType )
    {   
        
        try
        {   
            $reviewsDetails = Reviews::select('review_comment', 'rating','users.first_name', 'users.family_name','files.file_path as fileUrl')
                                    ->join('users', 'users.id', '=', 'reviews.user_id')
                                    ->leftJoin('files', 'files.linkable_id', '=', 'users.id')
                                    ->where('files.linkable_type', 'users')
                                    ->where('users.status', 1)
                                    ->where('files.status', 1)
                                    ->where('reviews.status', 1)
                                    ->where('reviews.is_approved', 1)
                                    ->where('reviews.linkable_id', $linkableId)
                                    ->where('reviews.linkable_type', $linkableType)
                                    ->get()
                                    ->toArray();

            return $reviewsDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Reviews", 1);

        }
       
    }


    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getAverageReviews($linkableId , $linkableType )
    {   
        
        try
        {   
            $reviewsDetails = Current(Reviews::select(
                                            \DB::raw('ifnull(avg(rating_responsiveness),3.2) as ratingResponsiveness'),
                                            \DB::raw('ifnull(avg(rating_quality),4.2) as ratingQuality'),
                                            \DB::raw('ifnull(avg(rating_availability),4.5) as ratingAvailability'),
                                            \DB::raw('ifnull(avg(rating_value_for_money),3.2) as ratingValueForMoney')
                                        
                                )
                                ->join('packages', 'packages.id', '=', 'reviews.linkable_id')
                                ->where('packages.linkable_type',$linkableType)
                                ->where('reviews.linkable_type', 'packages')
                                ->where('packages.linkable_id',$linkableId)
                                ->groupBy('packages.linkable_id')
                                ->where('reviews.status', 1)
                                ->get()
                                ->toArray()
                            );


            return $reviewsDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Reviews", 1);

        }
       
    }

    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getAverageReviewsByType( $linkableId, $linkableType )
    {   
        
        try
        {   
            $reviewsDetails = Current(Reviews::select(
                                            \DB::raw('cast( ifnull(avg(rating_responsiveness),3.2) as decimal(10,2) ) as ratingResponsiveness'),
                                            \DB::raw('cast(ifnull(avg(rating_quality),4.2) as decimal(10,2) ) as ratingQuality'),
                                            \DB::raw('cast(ifnull(avg(rating_availability),4.5) as decimal(10,2) ) as ratingAvailability'),
                                            \DB::raw('cast(ifnull(avg(rating_value_for_money),3.2) as decimal(10,2) ) as ratingValueForMoney')
                                        
                                )
                                ->where('reviews.linkable_type', $linkableType)
                                ->where('reviews.linkable_id',$linkableId)
                                ->groupBy('reviews.linkable_id')
                                ->where('reviews.status', 1)
                                ->get()
                                ->toArray()
                            );


            return $reviewsDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Reviews", 1);

        }
       
    }

    
}
