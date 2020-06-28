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
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The location’s latitude.
	 * 
	 * @var number format:double
	 */
	public $latitude;
	/**
	 * The location’s longitude.
	 * 
	 * @var number format:double
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
	 * @var integer format:int32
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
	 * @var number format:float
	 */
	public $tax1;
	/**
	 * A decimal representation of the location’s second tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number format:float
	 */
	public $tax2;
	/**
	 * A decimal representation of the location’s third tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number format:float
	 */
	public $tax3;
	/**
	 * A decimal representation of the location’s fourth tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number format:float
	 */
	public $tax4;
	/**
	 * A decimal representation of the location’s fifth tax rate. See the
	 * example in the description of Tax1.
	 * 
	 * @var number format:float
	 */
	public $tax5;
	/**
	 * The number of reviews that clients have left for this location.
	 * 
	 * @var integer format:int32
	 */
	public $totalNumberOfRatings;
	/**
	 * The average rating for the location, out of five stars.
	 * 
	 * @var number format:double
	 */
	public $averageRating;
	/**
	 * The number of distinct introductory pricing options available for
	 * purchase at this location.
	 * 
	 * @var integer format:int64
	 */
	public $totalNumberOfDeals;

	protected function getInputMap()
	{
		return [
			'AdditionalImageURLs' => ['additionalImageUrLs', 'array', null],
			'Address' => ['address', 'string', null],
			'Address2' => ['address2', 'string', null],
			'Amenities' => ['amenities', 'array', Amenity::class],
			'BusinessDescription' => ['businessDescription', 'string', null],
			'City' => ['city', 'string', null],
			'Description' => ['description', 'string', null],
			'HasClasses' => ['hasClasses', 'boolean', null],
			'Id' => ['id', 'integer', 'int32'],
			'Latitude' => ['latitude', 'number', 'double'],
			'Longitude' => ['longitude', 'number', 'double'],
			'Name' => ['name', 'string', null],
			'Phone' => ['phone', 'string', null],
			'PhoneExtension' => ['phoneExtension', 'string', null],
			'PostalCode' => ['postalCode', 'string', null],
			'SiteID' => ['siteId', 'integer', 'int32'],
			'StateProvCode' => ['stateProvCode', 'string', null],
			'Tax1' => ['tax1', 'number', 'float'],
			'Tax2' => ['tax2', 'number', 'float'],
			'Tax3' => ['tax3', 'number', 'float'],
			'Tax4' => ['tax4', 'number', 'float'],
			'Tax5' => ['tax5', 'number', 'float'],
			'TotalNumberOfRatings' => ['totalNumberOfRatings', 'integer', 'int32'],
			'AverageRating' => ['averageRating', 'number', 'double'],
			'TotalNumberOfDeals' => ['totalNumberOfDeals', 'integer', 'int64'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'additionalImageUrLs' => ['AdditionalImageURLs', 'array', null],
			'address' => ['Address', 'string', null],
			'address2' => ['Address2', 'string', null],
			'amenities' => ['Amenities', 'array', Amenity::class],
			'businessDescription' => ['BusinessDescription', 'string', null],
			'city' => ['City', 'string', null],
			'description' => ['Description', 'string', null],
			'hasClasses' => ['HasClasses', 'boolean', null],
			'id' => ['Id', 'integer', 'int32'],
			'latitude' => ['Latitude', 'number', 'double'],
			'longitude' => ['Longitude', 'number', 'double'],
			'name' => ['Name', 'string', null],
			'phone' => ['Phone', 'string', null],
			'phoneExtension' => ['PhoneExtension', 'string', null],
			'postalCode' => ['PostalCode', 'string', null],
			'siteId' => ['SiteID', 'integer', 'int32'],
			'stateProvCode' => ['StateProvCode', 'string', null],
			'tax1' => ['Tax1', 'number', 'float'],
			'tax2' => ['Tax2', 'number', 'float'],
			'tax3' => ['Tax3', 'number', 'float'],
			'tax4' => ['Tax4', 'number', 'float'],
			'tax5' => ['Tax5', 'number', 'float'],
			'totalNumberOfRatings' => ['TotalNumberOfRatings', 'integer', 'int32'],
			'averageRating' => ['AverageRating', 'number', 'double'],
			'totalNumberOfDeals' => ['TotalNumberOfDeals', 'integer', 'int64'],
			];
	}
}
