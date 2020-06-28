<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetSalesRequest extends BaseModel
{
	/**
	 * Filters results to the requested sale ID.
	 * 
	 * @var integer format:int64
	 */
	public $saleId;
	/**
	 * Filters results to sales that happened after this date and time.
	 * 
	 * @var string format:date-time
	 */
	public $startSaleDateTime;
	/**
	 * Filters results to sales that happened before this date and time.
	 * 
	 * @var string format:date-time
	 */
	public $endSaleDateTime;
	/**
	 * Filters results to sales paid for by the given payment method ID.
	 * 
	 * @var integer format:int32
	 */
	public $paymentMethodId;
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

	protected function getInputMap()
	{
		return [
			'SaleId' => ['saleId', 'integer', 'int64'],
			'StartSaleDateTime' => ['startSaleDateTime', 'string', 'date-time'],
			'EndSaleDateTime' => ['endSaleDateTime', 'string', 'date-time'],
			'PaymentMethodId' => ['paymentMethodId', 'integer', 'int32'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'saleId' => ['SaleId', 'integer', 'int64'],
			'startSaleDateTime' => ['StartSaleDateTime', 'string', 'date-time'],
			'endSaleDateTime' => ['EndSaleDateTime', 'string', 'date-time'],
			'paymentMethodId' => ['PaymentMethodId', 'integer', 'int32'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
