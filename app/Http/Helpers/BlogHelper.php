<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Blogs;
use App\Models\Reviews;

class BlogHelper
{   
   
   public static function getBlogs()
   {    
        $returnArr = [];

        try
        {  

            $blogsData = Blogs::select( 'blogs.heading as blogHeader',
                                        'blogs.blog as blogText',
                                        'blogs.created_at as createdDate',
                                        'files.file_path as filePath')
                            ->join('files', 'files.linkable_id', '=', 'blogs.user_id')                          
                            ->where('files.linkable_type', 'users')
                            ->where('files.file_type', 'user_image')
                            ->where('files.status', 1)
                            ->orderBy('blogs.order_no', 'asc')
                            ->orderBy('blogs.created_at', 'asc')
                            ->paginate(2); 

            $blogsDataArr = $blogsData->toArray();

            $returnArr['blogs'] = $blogsDataArr['data'];

            unset($blogsDataArr['data']);

            $returnArr['paginate'] = $blogsDataArr;

            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching blogsData ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching blogsData", 1);

        }
   }

   public static function postBlog($data)
   {    
        try
        {  

            Blogs::createBlog($data);
           
            return TRUE;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while creating Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while creating Reviews", 1);

        }
   }
   
   public static function postReviews($data)
   {    
        try
        {  

            Reviews::createReviews($data);
           
            return TRUE;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while creating Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while creating Reviews", 1);

        }
   }
    
}
