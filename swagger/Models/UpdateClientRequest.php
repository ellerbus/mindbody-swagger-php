<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UpdateClientRequest extends BaseModel
{
	/**
	 * Contains information about the client to be updated. The client ID is
	 * used to look up the existing client to update and any specified values
	 * are updated.
	 * 
	 * @var Client 
	 */
	public $client;
	/**
	 * When `true`, indicates that test mode is enabled. The method is
	 * validated, but no client data is added or updated.<br />  Default:
	 * **false**
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * When `true`, the updated information is propagated to all of the
	 * region’s sites where the client has a profile.<br />  When `false`,
	 * only the local client is updated.<br />  Default: **true**
	 * 
	 * @var boolean 
	 */
	public $crossRegionalUpdate;
	/**
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
	/**
	 * Constructor
	 */
	public function __construct($client)
	{
		$this->client = $client;
	}

	protected function getInputMap()
	{
		return [
			'Client' => ['client', Client::class, null],
			'Test' => ['test', 'boolean', null],
			'CrossRegionalUpdate' => ['crossRegionalUpdate', 'boolean', null],
			'NewId' => ['newId', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'client' => ['Client', Client::class, null],
			'test' => ['Test', 'boolean', null],
			'crossRegionalUpdate' => ['CrossRegionalUpdate', 'boolean', null],
			'newId' => ['NewId', 'string', null],
			];
	}
}
