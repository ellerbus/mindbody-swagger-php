<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class Tip extends BaseModel
{
	/**
	 * The ID of the staff member the tip is for.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The sale’s ID associated with the tip.
	 * 
	 * @var integer format:int64
	 */
	public $saleId;
	/**
	 * The date and time when the tip was given.
	 * 
	 * @var string format:date-time
	 */
	public $saleDateTime;
	/**
	 * The amount tipped to the staff member.
	 * 
	 * @var number format:double
	 */
	public $earnings;

	protected function getInputMap()
	{
		return [
			'StaffId' => ['staffId', 'integer', 'int64'],
			'SaleId' => ['saleId', 'integer', 'int64'],
			'SaleDateTime' => ['saleDateTime', 'string', 'date-time'],
			'Earnings' => ['earnings', 'number', 'double'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => ['StaffId', 'integer', 'int64'],
			'saleId' => ['SaleId', 'integer', 'int64'],
			'saleDateTime' => ['SaleDateTime', 'string', 'date-time'],
			'earnings' => ['Earnings', 'number', 'double'],
			];
	}
}
