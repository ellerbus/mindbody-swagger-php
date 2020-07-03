<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetClassesRequest extends BaseModel
{
	/**
	 * The requested class description IDs.
	 * 
	 * @var integer[] 
	 */
	public $classDescriptionIds;
	/**
	 * The requested class IDs.
	 * 
	 * @var integer[] 
	 */
	public $classIds;
	/**
	 * The requested IDs of the teaching staff members.
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * The requested start date for filtering.   <br />Default: **today’s
	 * date**
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The requested end date for filtering.  <br />Default: **today’s
	 * date**
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The client ID of the client who is viewing this class list. Based on
	 * identity, the client may be able to see additional information, such
	 * as membership specials.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * A list of program IDs on which to base the search.
	 * 
	 * @var integer[] 
	 */
	public $programIds;
	/**
	 * A list of session type IDs on which to base the search.
	 * 
	 * @var integer[] 
	 */
	public $sessionTypeIds;
	/**
	 * A list of location IDs on which to base the search.
	 * 
	 * @var integer[] 
	 */
	public $locationIds;
	/**
	 * A list of semester IDs on which to base the search.
	 * 
	 * @var integer[] 
	 */
	public $semesterIds;
	/**
	 * When `true`, canceled classes are removed from the response.<br />
	 * When `false`, canceled classes are included in the response.<br />
	 * Default: **false**
	 * 
	 * @var boolean 
	 */
	public $hideCanceledClasses;
	/**
	 * When `true`, classes outside scheduling window are removed from the
	 * response.<br />  When `false`, classes are included in the response,
	 * regardless of the scheduling window.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $schedulingWindow;
	/**
	 * When included in the request, only records modified on or after the
	 * `LastModifiedDate` specified are included in the response.
	 * 
	 * @var string format:date-time
	 */
	public $lastModifiedDate;
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
			'ClassDescriptionIds' => ['classDescriptionIds', 'array', null],
			'ClassIds' => ['classIds', 'array', null],
			'StaffIds' => ['staffIds', 'array', null],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'ClientId' => ['clientId', 'string', null],
			'ProgramIds' => ['programIds', 'array', null],
			'SessionTypeIds' => ['sessionTypeIds', 'array', null],
			'LocationIds' => ['locationIds', 'array', null],
			'SemesterIds' => ['semesterIds', 'array', null],
			'HideCanceledClasses' => ['hideCanceledClasses', 'boolean', null],
			'SchedulingWindow' => ['schedulingWindow', 'boolean', null],
			'LastModifiedDate' => ['lastModifiedDate', 'string', 'date-time'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classDescriptionIds' => ['ClassDescriptionIds', 'array', null],
			'classIds' => ['ClassIds', 'array', null],
			'staffIds' => ['StaffIds', 'array', null],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'clientId' => ['ClientId', 'string', null],
			'programIds' => ['ProgramIds', 'array', null],
			'sessionTypeIds' => ['SessionTypeIds', 'array', null],
			'locationIds' => ['LocationIds', 'array', null],
			'semesterIds' => ['SemesterIds', 'array', null],
			'hideCanceledClasses' => ['HideCanceledClasses', 'boolean', null],
			'schedulingWindow' => ['SchedulingWindow', 'boolean', null],
			'lastModifiedDate' => ['LastModifiedDate', 'string', 'date-time'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
