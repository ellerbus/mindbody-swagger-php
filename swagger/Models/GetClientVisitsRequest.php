<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientVisitsRequest extends BaseModel
{
	/**
	 * The ID of the requested client.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The number of sites to skip when returning the site associated with a
	 * client.
	 * 
	 * @var integer format:int32
	 */
	public $clientAssociatedSitesOffset;
	/**
	 * When `true`, indicates that past and scheduled client visits across
	 * all sites in the region are returned.<br />  When `false`, indicates
	 * that only visits at the current site are returned.
	 * 
	 * @var boolean 
	 */
	public $crossRegionalLookup;
	/**
	 * The date past which class visits are not returned.  Default:
	 * **today’s date**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * The date before which class visits are not returned.  Default: **the
	 * end date**
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * When `true`, indicates that only visits that have not been paid for
	 * are returned.<br />  When `false`, indicates that all visits are
	 * returned, regardless of whether they have been paid for.<br />
	 * Default: **false**
	 * 
	 * @var boolean 
	 */
	public $unpaidsOnly;
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
			'ClientAssociatedSitesOffset' => ['clientAssociatedSitesOffset', 'integer', 'int32'],
			'CrossRegionalLookup' => ['crossRegionalLookup', 'boolean', null],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'UnpaidsOnly' => ['unpaidsOnly', 'boolean', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'clientAssociatedSitesOffset' => ['ClientAssociatedSitesOffset', 'integer', 'int32'],
			'crossRegionalLookup' => ['CrossRegionalLookup', 'boolean', null],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'unpaidsOnly' => ['UnpaidsOnly', 'boolean', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
