<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetSalesRequest extends BaseModel
{
	/*
	 * Filters results to the requested sale ID.
	 * 
	 * @var integer
	 */
	public $saleId;
	/*
	 * Filters results to sales that happened after this date and time.
	 * 
	 * @var string
	 */
	public $startSaleDateTime;
	/*
	 * Filters results to sales that happened before this date and time.
	 * 
	 * @var string
	 */
	public $endSaleDateTime;
	/*
	 * Filters results to sales paid for by the given payment method ID.
	 * 
	 * @var integer
	 */
	public $paymentMethodId;
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
}
