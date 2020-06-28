<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetContactLogsRequest extends BaseModel
{
	/**
	 * The ID of the client whose contact logs are being requested.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * Filters the results to contact logs created on or after this date.<br
	 * />  Default: **the current date**
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * Filters the results to contact logs created before this date.<br />
	 * Default: **the start date**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * Filters the results to return contact logs assigned to one or more
	 * staff IDs.
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * When `true`, system-generated contact logs are returned in the
	 * results.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $showSystemGenerated;
	/**
	 * Filters the results to contact logs assigned one or more of these type
	 * IDs.
	 * 
	 * @var integer[] 
	 */
	public $typeIds;
	/**
	 * Filters the results to contact logs assigned one or more of these
	 * subtype IDs.
	 * 
	 * @var integer[] 
	 */
	public $subtypeIds;
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
	/**
	 * Constructor
	 */
	public function __construct($clientId)
	{
		$this->clientId = $clientId;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'StaffIds' => ['staffIds', 'array', null],
			'ShowSystemGenerated' => ['showSystemGenerated', 'boolean', null],
			'TypeIds' => ['typeIds', 'array', null],
			'SubtypeIds' => ['subtypeIds', 'array', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'staffIds' => ['StaffIds', 'array', null],
			'showSystemGenerated' => ['ShowSystemGenerated', 'boolean', null],
			'typeIds' => ['TypeIds', 'array', null],
			'subtypeIds' => ['SubtypeIds', 'array', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
