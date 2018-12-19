<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\EventThemeMappings;
use App\Models\ThemeTypes;

class ThemeHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getEventCovers( $linkableIdArr, $linkableType )
    {   
        $returnArr      = [];
        
        $coversArr      = [];

        try
        {   
            $eventCoversDetails = EventThemeMappings::select(   'event_theme_mappings.linkable_id as eventOrganiserId', 
                                                                'event_theme_mappings.id as mappinId',
                                                                'event_theme_mappings.order_no as displayOrder',
                                                                'event_types.name as eventTypes',
                                                                'event_types.id as eventTypeId',
                                                                'theme_types.name',
                                                                'theme_types.short_description as aboutTheme',
                                                                'pricings.actual_price as actualPrice',
                                                                'pricings.discount',
                                                                'pricing_type.name as pricingType',
                                                                'files.file_path as filePath'
                                                             )
                                            ->join('theme_types', 'theme_types.id', '=', 'event_theme_mappings.theme_id')
                                            ->join('event_types', 'event_types.id', '=', 'theme_types.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'theme_types.id')
                                            ->join('files', 'files.linkable_id', '=', 'theme_types.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->whereIn('event_theme_mappings.linkable_id', $linkableIdArr)
                                            ->where('event_theme_mappings.linkable_type', $linkableType)
                                            ->where('files.linkable_type', 'themes')
                                            ->where('files.file_type', 'home_page_display')
                                            ->where('pricings.linkable_type', 'themes')
                                            ->where('event_theme_mappings.status', 1)
                                            ->where('event_types.status', 1)
                                            ->where('theme_types.status', 1)
                                            ->where('files.status', 1)
                                            ->orderBy('event_theme_mappings.order_no', 'asc')
                                            ->get()
                                            ->toArray();

            foreach ($eventCoversDetails as $key => $values) 
            {
                $returnArr[$values['eventOrganiserId']]['themes'][]         = $values;

                $returnArr[$values['eventOrganiserId']]['event_covers'][]   = $values['eventTypes'];

                $returnArr[$values['eventOrganiserId']]['price'][]          = ['pricingType' => $values['pricingType'], 'actualPrice' => $values['actualPrice'] ];

            }
            
            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching event Covers Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching event Covers Details", 1);

        }
       
    }

     /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getThemeDetails( $themeId )
    {   
        $returnArr      = [];
        
        try
        {   
            $themeDetail = ThemeTypes::select(   'event_types.name as eventName',
                                                        'theme_types.name as themeName',
                                                        'theme_types.short_description as aboutTheme',
                                                        'theme_types.set_up_time as setUpTime',
                                                        'theme_types.note',
                                                        'pricings.actual_price as actualPrice',
                                                        'pricings.discount',
                                                        'pricing_type.name as pricingType'
                                                   )
                                            
                                            ->join('event_types', 'event_types.id', '=', 'theme_types.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'theme_types.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->where('pricings.linkable_type', 'themes')
                                            ->where('theme_types.id', $themeId)
                                            ->where('event_types.status', 1)
                                            ->where('theme_types.status', 1)
                                            ->get()
                                            ->toArray();

            
            return $themeDetail;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Theme  Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching Theme Details", 1);

        }
       
    }

    
}
