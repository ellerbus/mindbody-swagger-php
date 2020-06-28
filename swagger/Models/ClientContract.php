<?php

namespace App\MindBody\Models;

/**
 * A client contract
 */
class ClientContract extends BaseModel
{
	/**
	 * The date on which the contract was signed.
	 * 
	 * @var string format:date-time
	 */
	public $agreementDate;
	/**
	 * The status of the client’s autopay.
	 * 
	 * @var string 
	 */
	public $autopayStatus;
	/**
	 * The name of the contract.
	 * 
	 * @var string 
	 */
	public $contractName;
	/**
	 * The date that the contract expires.
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * The unique ID of the contract.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The ID of the location where the contract was issued.
	 * 
	 * @var integer format:int32
	 */
	public $originationLocationId;
	/**
	 * The date that the contract became active.
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * The ID of the site where the contract was issued.
	 * 
	 * @var integer format:int32
	 */
	public $siteId;
	/**
	 * Contains details of the autopay events.
	 * 
	 * @var UpcomingAutopayEvent[] 
	 */
	public $upcomingAutopayEvents;

	protected function getInputMap()
	{
		return [
			'AgreementDate' => ['agreementDate', 'string', 'date-time'],
			'AutopayStatus' => ['autopayStatus', 'string', null],
			'ContractName' => ['contractName', 'string', null],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'Id' => ['id', 'integer', 'int32'],
			'OriginationLocationId' => ['originationLocationId', 'integer', 'int32'],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'SiteId' => ['siteId', 'integer', 'int32'],
			'UpcomingAutopayEvents' => ['upcomingAutopayEvents', 'array', UpcomingAutopayEvent::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'agreementDate' => ['AgreementDate', 'string', 'date-time'],
			'autopayStatus' => ['AutopayStatus', 'string', null],
			'contractName' => ['ContractName', 'string', null],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'id' => ['Id', 'integer', 'int32'],
			'originationLocationId' => ['OriginationLocationId', 'integer', 'int32'],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'siteId' => ['SiteId', 'integer', 'int32'],
			'upcomingAutopayEvents' => ['UpcomingAutopayEvents', 'array', UpcomingAutopayEvent::class],
			];
	}
}
