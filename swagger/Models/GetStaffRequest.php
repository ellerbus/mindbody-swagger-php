<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetStaffRequest extends BaseModel
{
	/**
	 * A list of the requested staff IDs.
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * Filters to apply to the search. Possible values are:  * StaffViewable
	 * * AppointmentInstructor  * ClassInstructor  * Male  * Female
	 * 
	 * @var string[] 
	 */
	public $filters;
	/**
	 * Return only staff members that are available for the specified session
	 * type. You must supply a valid `StartDateTime` and `LocationID` to use
	 * this parameter.
	 * 
	 * @var integer format:int32
	 */
	public $sessionTypeId;
	/**
	 * Return only staff members that are available at the specified date and
	 * time. You must supply a valid `SessionTypeID` and `LocationID` to use
	 * this parameter.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * Return only staff members that are available at the specified
	 * location. You must supply a valid `SessionTypeID` and `StartDateTime`
	 * to use this parameter.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
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
			'StaffIds' => ['staffIds', 'array', null],
			'Filters' => ['filters', 'array', null],
			'SessionTypeId' => ['sessionTypeId', 'integer', 'int32'],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffIds' => ['StaffIds', 'array', null],
			'filters' => ['Filters', 'array', null],
			'sessionTypeId' => ['SessionTypeId', 'integer', 'int32'],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
