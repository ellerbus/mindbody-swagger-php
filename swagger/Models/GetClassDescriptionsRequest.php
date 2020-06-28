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
	 * @var integer
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
	 * @var string
	 */
	public $startClassDateTime;
	/**
	 * Filters the results to class descriptions for scheduled classes that
	 * happen before the given date and time.
	 * 
	 * @var string
	 */
	public $endClassDateTime;
	/**
	 * Filters results to class descriptions for scheduled classes taught by
	 * the given staff member.
	 * 
	 * @var integer
	 */
	public $staffId;
	/**
	 * Filters results to classes descriptions for schedule classes as the
	 * given location.
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
