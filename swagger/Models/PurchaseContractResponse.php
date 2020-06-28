<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class PurchaseContractResponse extends BaseModel
{
	/**
	 * The ID of the client who is purchasing the contract.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The ID of the location where the contract is being purchased.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * The ID of the general contract being purchased.
	 * 
	 * @var integer format:int32
	 */
	public $contractId;
	/**
	 * The ID of the specific contract being purchased by this specific
	 * client, not to be confused with the `ContractId`, which refers to a
	 * general contract that the business offers.
	 * 
	 * @var integer format:int32
	 */
	public $clientContractId;

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'ContractId' => ['contractId', 'integer', 'int32'],
			'ClientContractId' => ['clientContractId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'contractId' => ['ContractId', 'integer', 'int32'],
			'clientContractId' => ['ClientContractId', 'integer', 'int32'],
			];
	}
}
