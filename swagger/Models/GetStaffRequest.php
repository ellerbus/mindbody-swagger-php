<?php

namespace App\MindBody\Models;

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
	 * @var integer
	 */
	public $sessionTypeId;
	/**
	 * Return only staff members that are available at the specified date and
	 * time. You must supply a valid `SessionTypeID` and `LocationID` to use
	 * this parameter.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/**
	 * Return only staff members that are available at the specified
	 * location. You must supply a valid `SessionTypeID` and `StartDateTime`
	 * to use this parameter.
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
}
