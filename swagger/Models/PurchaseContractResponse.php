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
	 * @var integer
	 */
	public $locationId;
	/**
	 * The ID of the general contract being purchased.
	 * 
	 * @var integer
	 */
	public $contractId;
	/**
	 * The ID of the specific contract being purchased by this specific
	 * client, not to be confused with the `ContractId`, which refers to a
	 * general contract that the business offers.
	 * 
	 * @var integer
	 */
	public $clientContractId;

	protected function getInputMap()
	{
		return [
			'ClientId' => 'clientId',
			'LocationId' => 'locationId',
			'ContractId' => 'contractId',
			'ClientContractId' => 'clientContractId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => 'ClientId',
			'locationId' => 'LocationId',
			'contractId' => 'ContractId',
			'clientContractId' => 'ClientContractId',
			];
	}
}
