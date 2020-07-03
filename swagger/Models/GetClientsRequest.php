<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetClientsRequest extends BaseModel
{
	/**
	 * The requested client IDs.  Default: **all IDs** that the authenticated
	 * user’s access level allows.
	 * 
	 * @var string[] 
	 */
	public $clientIDs;
	/**
	 * Text to use in the search. Can include FirstName, LastName, and Email.
	 * Note that user credentials must be provided.
	 * 
	 * @var string 
	 */
	public $searchText;
	/**
	 * When `true`, filters the results to include only those clients marked
	 * as prospects for the business.<br />  When `false`, indicates that
	 * only those clients who are not marked prospects should be returned.
	 * 
	 * @var boolean 
	 */
	public $isProspect;
	/**
	 * Filters the results to include only the clients that have been
	 * modified on or after this date.
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
			'ClientIDs' => ['clientIDs', 'array', null],
			'SearchText' => ['searchText', 'string', null],
			'IsProspect' => ['isProspect', 'boolean', null],
			'LastModifiedDate' => ['lastModifiedDate', 'string', 'date-time'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientIDs' => ['ClientIDs', 'array', null],
			'searchText' => ['SearchText', 'string', null],
			'isProspect' => ['IsProspect', 'boolean', null],
			'lastModifiedDate' => ['LastModifiedDate', 'string', 'date-time'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
