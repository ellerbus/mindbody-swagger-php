<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetStaffPermissionsRequest extends BaseModel
{
	/**
	 * The ID of the staff member whose permissions you want to return.
	 * 
	 * @var integer
	 */
	public $staffId;
	/**
	 * Constructor
	 */
	public function __construct($staffId)
	{
		$this->staffId = $staffId;
	}

	protected function getInputMap()
	{
		return [
			'StaffId' => 'staffId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => 'StaffId',
			];
	}
}
