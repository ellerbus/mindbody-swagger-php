<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetStaffPermissionsRequest extends BaseModel
{
	/**
	 * The ID of the staff member whose permissions you want to return.
	 * 
	 * @var integer format:int64
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
			'StaffId' => ['staffId', 'integer', 'int64'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => ['StaffId', 'integer', 'int64'],
			];
	}
}
