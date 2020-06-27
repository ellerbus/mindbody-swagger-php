<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetContractsRequest extends BaseModel
{
	/*
	 * When included, the response only contains details about the specified
	 * contract IDs.
	 * 
	 * @var integer[]
	 */
	public $contractIds;
	/*
	 * When `true`, the response only contains details about contracts and
	 * AutoPay options that can be sold online.<br />  When `false`, only
	 * contracts that are not intended to be sold online are returned.<br />
	 * Default: **all contracts**
	 * 
	 * @var boolean
	 */
	public $soldOnline;
	/*
	 * The ID of the location that has the requested contracts and AutoPay
	 * options.
	 * 
	 * @var integer
	 */
	public $locationId;
	/*
	 * The ID of the client.
	 * 
	 * @var integer
	 */
	public $consumerId;
	/*
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/*
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
	/*
	 *
	 */
	public function __construct($locationId)
	{
		$this->locationId = $locationId;
	}
}
