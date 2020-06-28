<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetActiveClientMembershipsRequest extends BaseModel
{
	/**
	 * The ID of the client whose membership was requested.
	 * 
	 * @var string
	 */
	public $clientId;
	/**
	 * The ID of the location where the requested membership was created.
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * Used to retrieve a client’s memberships from multiple sites within
	 * an organization. When included and set to `true`, it searches a
	 * maximum of ten sites with which this client is associated. When a
	 * client is associated with more than ten sites, use
	 * `ClientAssociatedSitesOffset` as many times as needed to search the
	 * additional sites with which the client is associated. You can use the
	 * `CrossRegionalClientAssociations` value from `GET
	 * CrossRegionalClientAssociations` to determine how many sites the
	 * client is associated with. Note that a `SiteID` is returned and
	 * populated in the `ClientServices` response when `CrossRegionalLookup`
	 * is set to `true`.  Default: **false**
	 * 
	 * @var boolean
	 */
	public $crossRegionalLookup;
	/**
	 * Used to retrieve a client’s memberships from multiple sites within
	 * an organization when the client is associated with more than ten
	 * sites. To change which ten sites are searched, change this offset
	 * value. A value of 0 means that no sites are skipped and the first ten
	 * sites are returned. You can use the `CrossRegionalClientAssociations`
	 * value from `GET CrossRegionalClientAssociations` to determine how many
	 * sites the client is associated with. Note that you must always have
	 * `CrossRegionalLookup` set to `true` to use this parameter.<br />
	 * Default: **0**    For example, if a client is associated with 25
	 * sites, you need to call `GetClientServices` three times, as follows:
	 * * Use `GET CrossRegionalClientAssociations` to determine how many
	 * sites a client is associated with, which tells you how many additional
	 * calls you need to make.  * Either omit `ClientAssociatedSitesOffset`
	 * or set it to 0 to return the client’s services (pricing options)
	 * from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return
	 * the client pricing options from sites 11-20  * Set
	 * `ClientAssociatedSitesOffset` to 20 to return the client pricing
	 * options from sites 21-25
	 * 
	 * @var integer
	 */
	public $clientAssociatedSitesOffset;
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
			'ClientId' => 'clientId',
			'LocationId' => 'locationId',
			'CrossRegionalLookup' => 'crossRegionalLookup',
			'ClientAssociatedSitesOffset' => 'clientAssociatedSitesOffset',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => 'ClientId',
			'locationId' => 'LocationId',
			'crossRegionalLookup' => 'CrossRegionalLookup',
			'clientAssociatedSitesOffset' => 'ClientAssociatedSitesOffset',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
