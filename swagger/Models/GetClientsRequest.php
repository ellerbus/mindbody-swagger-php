<?php

namespace App\MindBody\Models;

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
