<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Files;
use App\Models\AmenitieTypes;

class FileHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getFiles( $linkableIdArr, $linkableType )
    {   
        
        try
        {   
            $fileDetails = Files::select('linkable_id','linkable_type','file_type as fileType', 'files.file_path as filePath', 'file_extension as fileExtenstion','order_no as fileDisplayOrder')
                                        ->where('files.linkable_type', $linkableType)
                                        ->whereIn('linkable_id', $linkableIdArr)
                                        ->where('files.status', 1)
                                        ->orderBy('order_no', 'asc')
                                        ->get()
                                        ->toArray();

            return $fileDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching files ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching files", 1);

        }
       
    }

    
}
