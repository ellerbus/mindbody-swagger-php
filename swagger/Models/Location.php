<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Location extends BaseModel
{
	/**
	 * A list of URLs of any images associated with this location.
	 * 
	 * @var string[]
	 */
	public $additionalImageUrLs;
	/**
	 * The first line of the location’s street address.
	 * 
	 * @var string
	 */
	public $address;
	/**
	 * A second address line for the location’s street address, if needed.
	 * 
	 * @var string
	 */
	public $address2;
	/**
	 * A list of strings representing amenities available at the location.
	 * 
	 * @var Amenity[]
	 */
	public $amenities;
	/**
	 * The business description for the location, as configured by the
	 * business owner.
	 * 
	 * @var string
	 */
	public $businessDescription;
	/**
	 * The location’s city.
	 * 
	 * @var string
	 */
	public $city;
	/**
	 * A description of the location.
	 * 
	 * @var string
	 */
	public $description;
	/**
	 * When `true`, indicates that classes are held at this location.<br />
	 * When `false`, Indicates that classes are not held at this location.
	 * 
	 * @var boolean
	 */
	public $hasClasses;
	/**
	 * The ID assigned to this location.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The location’s latitude.
	 * 
	 * @var number
	 */
	public $latitude;
	/**
	 * The location’s longitude.
	 * 
	 * @var number
	 */
	public $longitude;
	/**
	 * The name of this location.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * The location’s phone number.
	 * 
	 * @var string
	 */
	public $phone;
	/**
	 * The location’s phone extension.
	 * 
	 * @var string
	 */
	public $phoneExtension;
	/**
	 * The location’s postal code.
	 * 
	 * @var string
	 */
	public $postalCode;
	/**
	 * The ID number assigned to this location.
	 * 
	 * @var integer
	 */
	public $siteId;
	/**
	 * The location’s state or province code.
	 * 
	 * @var string
	 */
	public $stateProvCode;
	/**
	 * A decimal representation of the location’s first tax rate. Tax
	 * properties are provided to apply all taxes to the purchase price that
	 * the purchase is subject to. Use as many tax properties as needed to
	 * represent all the taxes that apply in the location. Enter a decimal
	 * number that represents the appropriate tax rate. For example, for an
	 * 8% sales tax, enter 0.08.
	 * 
	 * @var number
	 */
	public $tax1;
	/**
	 * A decimal representation of the location’s second tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number
	 */
	public $tax2;
	/**
	 * A decimal representation of the location’s third tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number
	 */
	public $tax3;
	/**
	 * A decimal representation of the location’s fourth tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number
	 */
	public $tax4;
	/**
	 * A decimal representation of the location’s fifth tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number
	 */
	public $tax5;
	/**
	 * The number of reviews that clients have left for this location.
	 * 
	 * @var integer
	 */
	public $totalNumberOfRatings;
	/**
	 * The average rating for the location, out of five stars.
	 * 
	 * @var number
	 */
	public $averageRating;
	/**
	 * The number of distinct introductory pricing options available for
	 * purchase at this location.
	 * 
	 * @var integer
	 */
	public $totalNumberOfDeals;
}
