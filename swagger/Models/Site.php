<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Site extends BaseModel
{
	/**
	 * When `true`, indicates that this site accepts American Express
	 * cards.<br />  When `false`, indicates that this site does not accept
	 * American Express credit cards.
	 * 
	 * @var boolean
	 */
	public $acceptsAmericanExpress;
	/**
	 * When `true`, indicates that this site accepts Discover cards.<br />
	 * When `false`, indicates that this site does not accept Discover credit
	 * cards.
	 * 
	 * @var boolean
	 */
	public $acceptsDiscover;
	/**
	 * When `true`, indicates that this site accepts MasterCard cards.<br />
	 * When `false`, indicates that this site does not accept MasterCard
	 * credit cards.
	 * 
	 * @var boolean
	 */
	public $acceptsMasterCard;
	/**
	 * When `true`, indicates that this site accepts Visa cards.<br />  When
	 * `false`, indicates that this site does not accept Visa credit cards.
	 * 
	 * @var boolean
	 */
	public $acceptsVisa;
	/**
	 * When `true`, indicates that this site allows access to its
	 * dashboard.<br />  When `false`, indicates that this site does not
	 * allow access to its dashboard.
	 * 
	 * @var boolean
	 */
	public $allowsDashboardAccess;
	/**
	 * The site’s email address.
	 * 
	 * @var string
	 */
	public $contactEmail;
	/**
	 * A description of the site.
	 * 
	 * @var string
	 */
	public $description;
	/**
	 * The site ID.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The URL to the site’s logo.
	 * 
	 * @var string
	 */
	public $logoUrl;
	/**
	 * The name of the site.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * A hex code for a color the business owner uses in marketing. This
	 * color can be used to set a theme for an integration so that it matches
	 * the configured color-scheme for the business.
	 * 
	 * @var string
	 */
	public $pageColor1;
	/**
	 * The hex code for a second color, to be used in the same manner as
	 * `pageColor1`.
	 * 
	 * @var string
	 */
	public $pageColor2;
	/**
	 * The hex code for a third color, to be used in the same manner as
	 * `pageColor1`.
	 * 
	 * @var string
	 */
	public $pageColor3;
	/**
	 * The hex code for a fourth color, to be used in the same manner as
	 * `pageColor1`.
	 * 
	 * @var string
	 */
	public $pageColor4;
	/**
	 * The MINDBODY pricing level for the business. Possible values are:
	 * Accelerate - The business is on MINDBODY’s Accelerate pricing tier.
	 * Grow - The business is on MINDBODY’s Essential pricing tier.  Legacy
	 * - The business is on an older MINDBODY pricing tier that is no longer
	 * offered.  Listing - The business is on an older MINDBODY pricing tier
	 * that is no longer offered.  Pro - The business is on an older MINDBODY
	 * pricing tier that is no longer offered.  Solo - The business is on an
	 * older MINDBODY pricing tier that is no longer offered.  Ultimate - The
	 * business is on MINDBODY’s Ultimate pricing tier.
	 * 
	 * @var string
	 */
	public $pricingLevel;
	/**
	 * When `true`, indicates that the business uses SMS text messages to
	 * communicate with its clients.<br />  When `false`, indicates that the
	 * business does not use SMS text messages to communicate with its
	 * clients.
	 * 
	 * @var boolean
	 */
	public $smsPackageEnabled;
	/**
	 * When `true`, indicates that the total includes tax.<br />  When
	 * `false`, indicates that the total does not include tax.
	 * 
	 * @var boolean
	 */
	public $taxInclusivePrices;
	/**
	 * The currency ISO code for the site.
	 * 
	 * @var string
	 */
	public $currencyIsoCode;
	/**
	 * The country code for the site.
	 * 
	 * @var string
	 */
	public $countryCode;
	/**
	 * The time zone the site is located in.
	 * 
	 * @var string
	 */
	public $timeZone;
	/**
	 * When `true`, indicates that direct debit can be used by clients at
	 * this site.<br />  When `false`, indicates that direct debit can not by
	 * used by clients at this site.
	 * 
	 * @var boolean
	 */
	public $acceptsDirectDebit;
}
