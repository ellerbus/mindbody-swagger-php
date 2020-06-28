<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class CommissionDetail extends BaseModel
{
	/**
	 * The type of commission earned. Possible values are:  *
	 * ItemStandardPercentageCommission  * ItemStandardFlatCommission  *
	 * ItemPromotionalPercentageCommission  * ItemPromotionalFlatCommission
	 * * StaffStandardPercentageCommission  * StaffStandardFlatCommission  *
	 * StaffPromotionalPercentageCommission  * StaffPromotionalFlatCommission
	 * 
	 * @var string
	 */
	public $commissionType;
	/**
	 * The portion of `Earnings` earned by this `CommissionType`.
	 * 
	 * @var number
	 */
	public $commissionEarnings;

	protected function getInputMap()
	{
		return [
			'CommissionType' => 'commissionType',
			'CommissionEarnings' => 'commissionEarnings',
			];
	}

	protected function getOutputMap()
	{
		return [
			'commissionType' => 'CommissionType',
			'commissionEarnings' => 'CommissionEarnings',
			];
	}
}
