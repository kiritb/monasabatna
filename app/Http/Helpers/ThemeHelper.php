<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\EventThemeMappings;

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
                                                                'pricings.actual_price as actualPrice',
                                                                'pricings.discount',
                                                                'pricing_type.name as pricingType'
                                                             )
                                            ->join('theme_types', 'theme_types.id', '=', 'event_theme_mappings.theme_id')
                                            ->join('event_types', 'event_types.id', '=', 'theme_types.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'theme_types.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->whereIn('event_theme_mappings.linkable_id', $linkableIdArr)
                                            ->where('event_theme_mappings.linkable_type', $linkableType)
                                            ->where('pricings.linkable_type', 'themes')
                                            ->where('event_theme_mappings.status', 1)
                                            ->where('event_types.status', 1)
                                            ->where('theme_types.status', 1)
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

    
}
