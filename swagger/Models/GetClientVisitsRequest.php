<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClientVisitsRequest extends BaseModel
{
	/*
	 * The ID of the requested client.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The number of sites to skip when returning the site associated with a
	 * client.
	 * 
	 * @var integer
	 */
	public $clientAssociatedSitesOffset;
	/*
	 * When `true`, indicates that past and scheduled client visits across
	 * all sites in the region are returned.<br />  When `false`, indicates
	 * that only visits at the current site are returned.
	 * 
	 * @var boolean
	 */
	public $crossRegionalLookup;
	/*
	 * The date past which class visits are not returned.  Default:
	 * **today’s date**
	 * 
	 * @var string
	 */
	public $endDate;
	/*
	 * The date before which class visits are not returned.  Default: **the
	 * end date**
	 * 
	 * @var string
	 */
	public $startDate;
	/*
	 * When `true`, indicates that only visits that have not been paid for
	 * are returned.<br />  When `false`, indicates that all visits are
	 * returned, regardless of whether they have been paid for.<br />
	 * Default: **false**
	 * 
	 * @var boolean
	 */
	public $unpaidsOnly;
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
	 * Constructor
	 */
	public function __construct($clientId)
	{
		$this->clientId = $clientId;
	}
}
