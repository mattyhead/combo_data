<?php
/*
Class Combo provides arrays shaped for Joomla1.5 select/options
and lookups for resulting form responses.

 */
class PVCombo {
	/**
	 * LinkTypes indexed by an arbitrary index
	 * @var array
	 */
	public static $phoneTypeLong = array(
		'2' => 'home',
		'3' => 'cell',
		'4' => 'fax',
		'5' => 'pager',
	);

	/**
	 * Phone functions by an arbitrary index
	 * @var array
	 */
	public static $phoneTypeShort = array(
		'1' => 'home',
		'2' => 'cell',
	);

	/**
	 * Prefixes by an arbitrary index (with null element)
	 * @var array
	 */
	public static $prefix = array(
		'1' => '',
		'2' => 'Mr',
		'3' => 'Mrs',
		'4' => 'Ms',
		'5' => 'Miss',
		'6' => 'Dr',
	);

	/**
	 * Genders (dupes OK) indexed by conclusive prefix
	 * @var array
	 */
	public static $prefixGender = array(
		'Mr'   => 'M',
		'Ms'   => 'F',
		'Miss' => 'F',
		'Mrs'  => 'F',
	);

	/**
	 * Marital statuses indexed by conclusive prefix
	 * @var array
	 */
	public static $prefixMarital = array(
		'Miss' => 'S',
		'Mrs'  => 'M',
	);

	/**
	 * States indexed by abbreviations
	 * @var array
	 */
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

	/**
	 * Suffixes by an arbitrary index
	 * @var array
	 */
	public static $suffix = array(
		'1' => '',
		'2' => 'Jr',
		'3' => 'Sr',
		'4' => 'II',
		'5' => 'III',
		'6' => 'Esq',
	);

	/**
	 * Forms property (an indexed array) into something joomla.html.select.genericlist can use
	 * @param   array $arr Static property array
	 * @return  array usable by joomla.html.select.genericlist
	 */
	public static function setComboData($propArray) {
		foreach ($propArray as $idx       => $value) {
			$return[] = (object) array('idx' => $idx, 'value' => $value);
		}
		return $return;
	}

	/**
	 * Agnostic call to get combo-friendly data
	 * @param  string  $propName  name of property
	 * @return method             returns conbo-friendly data
	 */
	public static function gets($propName) {
		return self::setComboData(self::$$propName);
	}

	/**
	 * Agnostic call to get a specific property element
	 * @param  string $propName propery name
	 * @param  string $idx      index to call
	 * @return string           desired element of called property
	 */
	public static function get($propName, $idx = null) {
		if ($idx) {
			return self::$$propName[$idx];
		}
		return self::$$propName;
	}
}
