<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class CommissionPayrollEvent extends BaseModel
{
	/**
	 * The ID of the staff member who earned commissions.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The date and time when the sale occurred.
	 * 
	 * @var string format:date-time
	 */
	public $saleDateTime;
	/**
	 * The sale’s ID.
	 * 
	 * @var integer format:int64
	 */
	public $saleId;
	/**
	 * The product ID of the item for which the staff earned commissions.
	 * 
	 * @var integer format:int64
	 */
	public $productId;
	/**
	 * Contains information about which commissions the staff earned for this
	 * item.
	 * 
	 * @var CommissionDetail[] 
	 */
	public $earningsDetails;
	/**
	 * The total commissions earned by the staff for this item.
	 * 
	 * @var number format:double
	 */
	public $earnings;

	protected function getInputMap()
	{
		return [
			'StaffId' => ['staffId', 'integer', 'int64'],
			'SaleDateTime' => ['saleDateTime', 'string', 'date-time'],
			'SaleId' => ['saleId', 'integer', 'int64'],
			'ProductId' => ['productId', 'integer', 'int64'],
			'EarningsDetails' => ['earningsDetails', 'array', CommissionDetail::class],
			'Earnings' => ['earnings', 'number', 'double'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => ['StaffId', 'integer', 'int64'],
			'saleDateTime' => ['SaleDateTime', 'string', 'date-time'],
			'saleId' => ['SaleId', 'integer', 'int64'],
			'productId' => ['ProductId', 'integer', 'int64'],
			'earningsDetails' => ['EarningsDetails', 'array', CommissionDetail::class],
			'earnings' => ['Earnings', 'number', 'double'],
			];
	}
}
