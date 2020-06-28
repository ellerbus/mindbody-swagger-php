<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetSessionTypesRequest extends BaseModel
{
	/**
	 * Filters results to session types that belong to one of the given
	 * program IDs. If omitted, all program IDs return.
	 * 
	 * @var integer[] 
	 */
	public $programIDs;
	/**
	 * When `true`, indicates that only the session types that can be booked
	 * online should be returned.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $onlineOnly;
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
			'ProgramIDs' => ['programIDs', 'array', null],
			'OnlineOnly' => ['onlineOnly', 'boolean', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'programIDs' => ['ProgramIDs', 'array', null],
			'onlineOnly' => ['OnlineOnly', 'boolean', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
