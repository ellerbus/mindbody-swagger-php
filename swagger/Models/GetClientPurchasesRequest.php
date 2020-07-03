<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetClientPurchasesRequest extends BaseModel
{
	/**
	 * The ID of the client you are querying for purchases.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * Filters results to purchases made on or after this timestamp.<br />
	 * Default: **now**
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * Filters results to purchases made before this timestamp.<br />
	 * Default: **end of today**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * Filters results to the single record associated with this ID.
	 * 
	 * @var integer format:int32
	 */
	public $saleId;
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
	public function __construct($clientId)
	{
		$this->clientId = $clientId;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'SaleId' => ['saleId', 'integer', 'int32'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'saleId' => ['SaleId', 'integer', 'int32'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
