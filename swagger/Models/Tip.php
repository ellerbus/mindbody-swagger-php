<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Tip extends BaseModel
{
	/**
	 * The ID of the staff member the tip is for.
	 * 
	 * @var integer
	 */
	public $staffId;
	/**
	 * The sale’s ID associated with the tip.
	 * 
	 * @var integer
	 */
	public $saleId;
	/**
	 * The date and time when the tip was given.
	 * 
	 * @var string
	 */
	public $saleDateTime;
	/**
	 * The amount tipped to the staff member.
	 * 
	 * @var number
	 */
	public $earnings;

	protected function getInputMap()
	{
		return [
			'StaffId' => 'staffId',
			'SaleId' => 'saleId',
			'SaleDateTime' => 'saleDateTime',
			'Earnings' => 'earnings',
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => 'StaffId',
			'saleId' => 'SaleId',
			'saleDateTime' => 'SaleDateTime',
			'earnings' => 'Earnings',
			];
	}
}
