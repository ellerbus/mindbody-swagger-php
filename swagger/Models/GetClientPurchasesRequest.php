<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClientPurchasesRequest extends BaseModel
{
	/*
	 * The ID of the client you are querying for purchases.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * Filters results to purchases made on or after this timestamp.<br />
	 * Default: **now**
	 * 
	 * @var string
	 */
	public $startDate;
	/*
	 * Filters results to purchases made before this timestamp.<br />
	 * Default: **end of today**
	 * 
	 * @var string
	 */
	public $endDate;
	/*
	 * Filters results to the single record associated with this ID.
	 * 
	 * @var integer
	 */
	public $saleId;
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
	public function __construct($clientId)
	{
		$this->clientId = $clientId;
	}
}
