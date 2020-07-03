<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetClientContractsRequest extends BaseModel
{
	/**
	 * The ID of the client.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * When `true`, indicates that the requesting client’s cross regional
	 * contracts are returned, if any.<br />  When `false`, indicates that
	 * cross regional contracts are not returned.
	 * 
	 * @var boolean 
	 */
	public $crossRegionalLookup;
	/**
	 * Determines how many sites are skipped over when retrieving a
	 * client’s cross regional contracts. Used when a client ID is linked
	 * to more than ten sites in an organization. Only a maximum of ten site
	 * databases are queried when this call is made and `CrossRegionalLookup`
	 * is set to `true`. To change which sites are queried, change this
	 * offset value.  Default: **0**
	 * 
	 * @var integer format:int32
	 */
	public $clientAssociatedSitesOffset;
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
			'CrossRegionalLookup' => ['crossRegionalLookup', 'boolean', null],
			'ClientAssociatedSitesOffset' => ['clientAssociatedSitesOffset', 'integer', 'int32'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'crossRegionalLookup' => ['CrossRegionalLookup', 'boolean', null],
			'clientAssociatedSitesOffset' => ['ClientAssociatedSitesOffset', 'integer', 'int32'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
