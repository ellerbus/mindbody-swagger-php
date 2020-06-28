<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetContractsRequest extends BaseModel
{
	/**
	 * When included, the response only contains details about the specified
	 * contract IDs.
	 * 
	 * @var integer[] 
	 */
	public $contractIds;
	/**
	 * When `true`, the response only contains details about contracts and
	 * AutoPay options that can be sold online.<br />  When `false`, only
	 * contracts that are not intended to be sold online are returned.<br />
	 * Default: **all contracts**
	 * 
	 * @var boolean 
	 */
	public $soldOnline;
	/**
	 * The ID of the location that has the requested contracts and AutoPay
	 * options.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * The ID of the client.
	 * 
	 * @var integer format:int64
	 */
	public $consumerId;
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
	public function __construct($locationId)
	{
		$this->locationId = $locationId;
	}

	protected function getInputMap()
	{
		return [
			'ContractIds' => ['contractIds', 'array', null],
			'SoldOnline' => ['soldOnline', 'boolean', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'ConsumerId' => ['consumerId', 'integer', 'int64'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'contractIds' => ['ContractIds', 'array', null],
			'soldOnline' => ['SoldOnline', 'boolean', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'consumerId' => ['ConsumerId', 'integer', 'int64'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
