<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class UpdateClientRequest extends BaseModel
{
	/*
	 * Contains information about the client to be updated. The client ID is
	 * used to look up the existing client to update and any specified values
	 * are updated.
	 * 
	 * @var Client
	 */
	public $client;
	/*
	 * When `true`, indicates that test mode is enabled. The method is
	 * validated, but no client data is added or updated.<br />  Default:
	 * **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * When `true`, the updated information is propagated to all of the
	 * region’s sites where the client has a profile.<br />  When `false`,
	 * only the local client is updated.<br />  Default: **true**
	 * 
	 * @var boolean
	 */
	public $crossRegionalUpdate;
	/*
	 * The new RSSID to be used for the client. Use `NewId` to assign a
	 * specific number to be a client’s ID. If that number is not
	 * available, the call returns an error. This RSSID must be unique within
	 * the subscriber’s site. If this is a cross-regional update, the RSSID
	 * must be unique across the region. If the requested number is already
	 * in use, an error is returned.
	 * 
	 * @var string
	 */
	public $newId;
	/*
	 *
	 */
	public function __construct($client)
	{
		$this->client = $client;
	}
}
