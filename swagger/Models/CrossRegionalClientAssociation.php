<?php

namespace App\MindBody\Models;

/*
 * A client cross region association
 */
class CrossRegionalClientAssociation extends BaseModel
{
	/*
	 * The ID of the site to which the client belongs.
	 * 
	 * @var integer
	 */
	public $siteId;
	/*
	 * The client’s RSSID.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The client’s unique ID.
	 * 
	 * @var integer
	 */
	public $uniqueId;
}
