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
	 * @var string format:date-time
	 */
	public $balanceDate;
	/**
	 * The class ID of the event for which you want a balance.
	 * 
	 * @var integer format:int32
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
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;
	/**
	 * Constructor
	 */
	public function __construct($clientIds)
	{
		$this->clientIds = $clientIds;
	}

	protected function getInputMap()
	{
		return [
			'BalanceDate' => ['balanceDate', 'string', 'date-time'],
			'ClassId' => ['classId', 'integer', 'int32'],
			'ClientIds' => ['clientIds', 'array', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'balanceDate' => ['BalanceDate', 'string', 'date-time'],
			'classId' => ['ClassId', 'integer', 'int32'],
			'clientIds' => ['ClientIds', 'array', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
