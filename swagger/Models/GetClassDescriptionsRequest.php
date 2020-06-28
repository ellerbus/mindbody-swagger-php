<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassDescriptionsRequest extends BaseModel
{
	/**
	 * Filters to the single result with the given ID.
	 * 
	 * @var integer format:int32
	 */
	public $classDescriptionId;
	/**
	 * Filters results to class descriptions belonging to the given programs.
	 * 
	 * @var integer[] 
	 */
	public $programIds;
	/**
	 * Filters the results to class descriptions for scheduled classes that
	 * happen on or after the given date and time.
	 * 
	 * @var string format:date-time
	 */
	public $startClassDateTime;
	/**
	 * Filters the results to class descriptions for scheduled classes that
	 * happen before the given date and time.
	 * 
	 * @var string format:date-time
	 */
	public $endClassDateTime;
	/**
	 * Filters results to class descriptions for scheduled classes taught by
	 * the given staff member.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * Filters results to classes descriptions for schedule classes as the
	 * given location.
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
			'ClassDescriptionId' => ['classDescriptionId', 'integer', 'int32'],
			'ProgramIds' => ['programIds', 'array', null],
			'StartClassDateTime' => ['startClassDateTime', 'string', 'date-time'],
			'EndClassDateTime' => ['endClassDateTime', 'string', 'date-time'],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classDescriptionId' => ['ClassDescriptionId', 'integer', 'int32'],
			'programIds' => ['ProgramIds', 'array', null],
			'startClassDateTime' => ['StartClassDateTime', 'string', 'date-time'],
			'endClassDateTime' => ['EndClassDateTime', 'string', 'date-time'],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
