<?php
/*
Class Combo provides arrays shaped for Joomla1.5 select/options
and lookups for resulting form responses.

 */
class PVCombo {
    public static $linkType = array(
        '1' => 'email',
        '2' => 'phone',
        '3' => 'cell',
        '4' => 'fax',
        '5' => 'pager',
    );

    public static $phoneType = array(
        '1' => 'phone',
        '2' => 'cell',
        '3' => 'fax',
        '4' => 'pager',
    );

    public static $prefix = array(
        '1' => '',
        '2' => 'Mr',
        '3' => 'Mrs',
        '4' => 'Ms',
        '5' => 'Miss',
        '6' => 'Dr',
    );

    public static $prefixGender = array(
        'Mr' => 'M',
        'Ms' => 'F',
        'Miss' => 'F',
        'Mrs' => 'F',
    );

    public static $prefixMarital = array(
        'Miss' => 'S',
        'Mrs' => 'M',
    );

    public static $state = array(
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AS' => 'American',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'Dist. of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'GU' => 'Guam',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MH' => 'Marshall',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'FM' => 'Micronesia',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'MP' => 'Northern',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PW' => 'Palau',
        'PA' => 'Pennsylvania',
        'PR' => 'Puerto Rico',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'VI' => 'Virgin Islands',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
    );

    public static $suffix = array(
        '1' => '',
        '2' => 'Jr',
        '3' => 'Sr',
        '4' => 'II',
        '5' => 'III',
    );

    public static function setComboData($arr) {
        foreach ($arr as $idx => $value) {
            $return[] = (object) array('idx' => $idx, 'value' => $value);
        }
        return $return;
    }

    public static function gets($propName) {
        return self::setComboData(self::$$propName);
    }

    public static function get($idx, $propName) {
        return self::$$propName[$idx];
    }

    public static function getGender($idx) {
        return self::$genders[$idx];
    }

    public static function getMarital($idx) {
        return self::$maritals[$idx];
    }

    public static function getPrefix($idx) {
        return self::$prefixes[$idx];
    }

    public static function getPrefixes() {

        return self::setComboData(self::$prefixes);
    }

    public static function getSuffix($idx) {
        return self::$suffixes[$idx];
    }

    public static function getSuffixes() {
        return self::setComboData(self::$suffixes);
    }

    public static function getUSState($idx) {
        return self::$states[$idx];
    }

    public static function getUSStates() {
        return self::setComboData(self::$states);
    }
}