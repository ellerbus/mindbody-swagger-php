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
	 * @var integer format:int32
	 */
	public $membershipId;
	/**
	 * The date that this pricing option became active and could be used to
	 * pay for services.
	 * 
	 * @var string format:date-time
	 */
	public $activeDate;
	/**
	 * The number of service sessions this pricing option contained when
	 * first purchased.
	 * 
	 * @var integer format:int32
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
	 * @var string format:date-time
	 */
	public $expirationDate;
	/**
	 * The unique ID assigned to this pricing option, specific to when it was
	 * purchased by the client.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * The unique ID of this pricing option, not specific to any client's
	 * purchase of it.
	 * 
	 * @var integer format:int32
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
	 * @var string format:date-time
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
	 * @var integer format:int32
	 */
	public $remaining;
	/**
	 * The ID of the subscriber site associated with this pricing option.
	 * 
	 * @var integer format:int32
	 */
	public $siteId;
	/**
	 * The action taken.
	 * 
	 * @var string 
	 */
	public $action;

	protected function getInputMap()
	{
		return [
			'RestrictedLocations' => ['restrictedLocations', 'array', Location::class],
			'IconCode' => ['iconCode', 'string', null],
			'MembershipId' => ['membershipId', 'integer', 'int32'],
			'ActiveDate' => ['activeDate', 'string', 'date-time'],
			'Count' => ['count', 'integer', 'int32'],
			'Current' => ['current', 'boolean', null],
			'ExpirationDate' => ['expirationDate', 'string', 'date-time'],
			'Id' => ['id', 'integer', 'int64'],
			'ProductId' => ['productId', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'PaymentDate' => ['paymentDate', 'string', 'date-time'],
			'Program' => ['program', Program::class, null],
			'Remaining' => ['remaining', 'integer', 'int32'],
			'SiteId' => ['siteId', 'integer', 'int32'],
			'Action' => ['action', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'restrictedLocations' => ['RestrictedLocations', 'array', Location::class],
			'iconCode' => ['IconCode', 'string', null],
			'membershipId' => ['MembershipId', 'integer', 'int32'],
			'activeDate' => ['ActiveDate', 'string', 'date-time'],
			'count' => ['Count', 'integer', 'int32'],
			'current' => ['Current', 'boolean', null],
			'expirationDate' => ['ExpirationDate', 'string', 'date-time'],
			'id' => ['Id', 'integer', 'int64'],
			'productId' => ['ProductId', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'paymentDate' => ['PaymentDate', 'string', 'date-time'],
			'program' => ['Program', Program::class, null],
			'remaining' => ['Remaining', 'integer', 'int32'],
			'siteId' => ['SiteId', 'integer', 'int32'],
			'action' => ['Action', 'string', null],
			];
	}
}
