<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetContactLogsRequest extends BaseModel
{
	/*
	 * The ID of the client whose contact logs are being requested.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * Filters the results to contact logs created on or after this date.<br
	 * />  Default: **the current date**
	 * 
	 * @var string
	 */
	public $startDate;
	/*
	 * Filters the results to contact logs created before this date.<br />
	 * Default: **the start date**
	 * 
	 * @var string
	 */
	public $endDate;
	/*
	 * Filters the results to return contact logs assigned to one or more
	 * staff IDs.
	 * 
	 * @var integer[]
	 */
	public $staffIds;
	/*
	 * When `true`, system-generated contact logs are returned in the
	 * results.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $showSystemGenerated;
	/*
	 * Filters the results to contact logs assigned one or more of these type
	 * IDs.
	 * 
	 * @var integer[]
	 */
	public $typeIds;
	/*
	 * Filters the results to contact logs assigned one or more of these
	 * subtype IDs.
	 * 
	 * @var integer[]
	 */
	public $subtypeIds;
	/*
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/*
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
	/*
	 *
	 */
	public function __construct($clientId)
	{
		$this->clientId = $clientId;
	}
}
