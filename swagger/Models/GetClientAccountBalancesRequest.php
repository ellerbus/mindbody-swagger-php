<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientAccountBalancesRequest extends BaseModel
{
	/**
	 * The date you want a balance relative to.   Default: **the current
	 * date**
	 * 
	 * @var string
	 */
	public $balanceDate;
	/**
	 * The class ID of the event for which you want a balance.
	 * 
	 * @var integer
	 */
	public $classId;
	/**
	 * The list of clients IDs for which you want account balances.
	 * 
	 * @var string[]
	 */
	public $clientIds;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
	/**
	 * Constructor
	 */
	public function __construct($clientIds)
	{
		$this->clientIds = $clientIds;
	}
}
