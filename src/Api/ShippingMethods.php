<?php

namespace Booni3\RedstagWms\Api;

class ShippingMethods
{
    public static function all(): array
    {
        return [
            'fedex_FIRST_OVERNIGHT' => 'FedEx First Overnight®',
            'fedex_PRIORITY_OVERNIGHT' => 'FedEx Priority Overnight®',
            'fedex_STANDARD_OVERNIGHT' => 'FedEx Standard Overnight®',
            'fedex_FEDEX_2_DAY_AM' => 'FedEx 2Day® A.M.',
            'fedex_FEDEX_2_DAY' => 'FedEx 2Day®',
            'fedex_FEDEX_EXPRESS_SAVER' => 'FedEx Express Saver®',
            'fedex_FEDEX_GROUND' => 'FedEx Ground®',
            'fedex_GROUND_HOME_DELIVERY' => 'FedEx Home Delivery®',
            'fedex_SMART_POST' => 'FedEx SmartPost®',
            'fedex_INTERNATIONAL_FIRST' => 'FedEx International First®',
            'fedex_INTERNATIONAL_PRIORITY' => 'FedEx International Priority®',
            'fedex_INTERNATIONAL_ECONOMY' => 'FedEx International Economy®',
            'fedex_INTERNATIONAL_GROUND' => 'FedEx International Ground®',

            'ups_01' => 'UPS Next Day Air',
            'ups_02' => 'UPS 2nd Day Air',
            'ups_03' => 'UPS Ground',
            'ups_11' => 'UPS Standard',
            'ups_12' => 'UPS 3 Day Select',
            'ups_14' => 'UPS Next Day Air Early',
            'ups_59' => 'UPS 2nd Day Air A.M.',
            'ups_65' => 'UPS Worldwide Saver',
            'ups_SP' => 'UPS SurePost',

            'usps_US-FC' => 'USPS First-Class',
            'usps_US-FCI' => 'USPS First-Class International',
            'usps_US-LM' => 'USPS Library Mail',
            'usps_US-MM' => 'USPS Media Mail',
            'usps_US-PS' => 'USPS Parcel Select Ground',
            'usps_US-PM' => 'USPS Priority Mail',
            'usps_US-PMI' => 'USPS Priority Mail International',
            'usps_US-XM' => 'USPS Priority Mail Express',
            'usps_US-EMI' => 'USPS Priority Mail Express International',

            'amazon_ANY' => 'Amazon Merchant Fulfillment',
            'amazon_Standard' => 'Amazon Standard Delivery',
            'amazon_FreeEconomy' => 'Amazon Free Economy',
            'amazon_SecondDay' => 'Amazon Two-Day Delivery',
            'amazon_NextDay' => 'Amazon One-Day Delivery',
            'amazon_Expedited' => 'Amazon Expedited Delivery',

            'ontrac_S' => 'OnTrac Sunrise',
            'ontrac_C' => 'OnTrac Ground',
            'ontrac_DC' => 'OnTrac Same Day',

            'lasership_NextDay' => 'LaserShip NextDay',

            'gls_Ground' => 'GLS Ground',
            'gls_PriorityOvernight' => 'GLS Priority Overnight',
            'gls_EarlyPriorityOvernight' => 'GLS Early Priority Overnight',
            'gls_EarlySaturday' => 'GLS Early Saturday',
            'gls_SaturdayDelivery' => 'GLS Saturday Delivery',

            'cheapest_ALL' => 'Cheapest method overall',
            'cheapest_GROUND' => 'Cheapest ground shipping method',
            'cheapest_POSTAL' => 'Cheapest USPS or USPS last-mile shipping method',
            'cheapest_THREE_DAY' => 'Cheapest 3-day shipping method',
            'cheapest_TWO_DAY' => 'Cheapest 2-day shippng method',
            'cheapest_OVERNIGHT' => 'Cheapest overnight shipping method',
            'cheapest_ON_TIME' => 'Cheapest shipping method to arrive on-time. This requires valid “desired_delivery_date” as well.',

            'external_ltl' => 'LTL',
            'external_ltl_thirdparty' => 'LTL - Third Party'
        ];
    }

    public static function isValidSlug($slug): bool
    {
        $all = self::all();

        return isset($all[$slug]);
    }
}
