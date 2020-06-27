<?php

namespace App\MindBody\Models;

/*
 * A client contract
 */
class ClientContract extends BaseModel
{
	/*
	 * The date on which the contract was signed.
	 * 
	 * @var string
	 */
	public $agreementDate;
	/*
	 * The status of the client’s autopay.
	 * 
	 * @var string
	 */
	public $autopayStatus;
	/*
	 * The name of the contract.
	 * 
	 * @var string
	 */
	public $contractName;
	/*
	 * The date that the contract expires.
	 * 
	 * @var string
	 */
	public $endDate;
	/*
	 * The unique ID of the contract.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The ID of the location where the contract was issued.
	 * 
	 * @var integer
	 */
	public $originationLocationId;
	/*
	 * The date that the contract became active.
	 * 
	 * @var string
	 */
	public $startDate;
	/*
	 * The ID of the site where the contract was issued.
	 * 
	 * @var integer
	 */
	public $siteId;
	/*
	 * Contains details of the autopay events.
	 * 
	 * @var UpcomingAutopayEvent[]
	 */
	public $upcomingAutopayEvents;
}
