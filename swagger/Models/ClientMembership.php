<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class ClientMembership extends BaseModel
{
	/**
	 * The locations that the membership is restricted to, if any.
	 * 
	 * @var Location[]
	 */
	public $restrictedLocations;
	/**
	 * Text code that represents the `MembershipIcon`.
	 * 
	 * @var string
	 */
	public $iconCode;
	/**
	 * The membership's ID.
	 * 
	 * @var integer
	 */
	public $membershipId;
	/**
	 * The date that this pricing option became active and could be used to
	 * pay for services.
	 * 
	 * @var string
	 */
	public $activeDate;
	/**
	 * The number of service sessions this pricing option contained when
	 * first purchased.
	 * 
	 * @var integer
	 */
	public $count;
	/**
	 * When `true`, there are service sessions remaining on the pricing
	 * option that can be used pay for the current session.<br />  When
	 * `false`, the client cannot use this pricing option to pay for other
	 * services.
	 * 
	 * @var boolean
	 */
	public $current;
	/**
	 * The date when the pricing option expires and can no longer be used to
	 * pay for services, even if unused service sessions remain on the
	 * option; expressed as UTC.
	 * 
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The unique ID assigned to this pricing option, specific to when it was
	 * purchased by the client.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The unique ID of this pricing option, not specific to any client's
	 * purchase of it.
	 * 
	 * @var integer
	 */
	public $productId;
	/**
	 * The name of this pricing option.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * The date on which the client paid for this pricing option.
	 * 
	 * @var string
	 */
	public $paymentDate;
	/**
	 * Contains information about the service category this service falls
	 * under.
	 * 
	 * @var Program
	 */
	public $program;
	/**
	 * The number of service sessions remaining in the pricing option that
	 * can still be used.
	 * 
	 * @var integer
	 */
	public $remaining;
	/**
	 * The ID of the subscriber site associated with this pricing option.
	 * 
	 * @var integer
	 */
	public $siteId;
	/**
	 * The action taken.
	 * 
	 * @var string
	 */
	public $action;
}
