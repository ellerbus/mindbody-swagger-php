<?php

namespace App\Mindbody\Models;

/**
 * A client cross region association
 */
class CrossRegionalClientAssociation extends BaseModel
{
	/**
	 * The ID of the site to which the client belongs.
	 * 
	 * @var integer format:int32
	 */
	public $siteId;
	/**
	 * The client’s RSSID.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The client’s unique ID.
	 * 
	 * @var integer format:int64
	 */
	public $uniqueId;

	protected function getInputMap()
	{
		return [
			'SiteId' => ['siteId', 'integer', 'int32'],
			'ClientId' => ['clientId', 'string', null],
			'UniqueId' => ['uniqueId', 'integer', 'int64'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'siteId' => ['SiteId', 'integer', 'int32'],
			'clientId' => ['ClientId', 'string', null],
			'uniqueId' => ['UniqueId', 'integer', 'int64'],
			];
	}
}
