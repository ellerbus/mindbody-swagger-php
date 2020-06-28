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
	 * @var integer
	 */
	public $staffId;
	/**
	 * The date and time when the sale occurred.
	 * 
	 * @var string
	 */
	public $saleDateTime;
	/**
	 * The sale’s ID.
	 * 
	 * @var integer
	 */
	public $saleId;
	/**
	 * The product ID of the item for which the staff earned commissions.
	 * 
	 * @var integer
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
	 * @var number
	 */
	public $earnings;

	protected function getInputMap()
	{
		return [
			'StaffId' => 'staffId',
			'SaleDateTime' => 'saleDateTime',
			'SaleId' => 'saleId',
			'ProductId' => 'productId',
			'EarningsDetails' => ['earningsDetails', CommissionDetail::class],
			'Earnings' => 'earnings',
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => 'StaffId',
			'saleDateTime' => 'SaleDateTime',
			'saleId' => 'SaleId',
			'productId' => 'ProductId',
			'earningsDetails' => 'EarningsDetails',
			'earnings' => 'Earnings',
			];
	}
}
