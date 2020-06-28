<?php

namespace App\MindBody\Models;

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
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The requested end date for filtering.  <br />Default: **today’s
	 * date**
	 * 
	 * @var string
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
	 * @var string
	 */
	public $lastModifiedDate;
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
