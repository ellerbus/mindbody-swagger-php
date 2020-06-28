<?php

namespace App\MindBody\Models;

/**
 * A service that is on a client's account.
 */
class ClientService extends BaseModel
{
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

	protected function getInputMap()
	{
		return [
			'ActiveDate' => 'activeDate',
			'Count' => 'count',
			'Current' => 'current',
			'ExpirationDate' => 'expirationDate',
			'Id' => 'id',
			'ProductId' => 'productId',
			'Name' => 'name',
			'PaymentDate' => 'paymentDate',
			'Program' => ['program', Program::class],
			'Remaining' => 'remaining',
			'SiteId' => 'siteId',
			'Action' => 'action',
			];
	}

	protected function getOutputMap()
	{
		return [
			'activeDate' => 'ActiveDate',
			'count' => 'Count',
			'current' => 'Current',
			'expirationDate' => 'ExpirationDate',
			'id' => 'Id',
			'productId' => 'ProductId',
			'name' => 'Name',
			'paymentDate' => 'PaymentDate',
			'program' => 'Program',
			'remaining' => 'Remaining',
			'siteId' => 'SiteId',
			'action' => 'Action',
			];
	}
}
