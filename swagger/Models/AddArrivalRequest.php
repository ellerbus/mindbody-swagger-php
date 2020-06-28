<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AddArrivalRequest extends BaseModel
{
	/**
	 * The ID of the requested client.
	 * 
	 * @var string
	 */
	public $clientId;
	/**
	 * The ID of the location for the requested arrival.
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * Constructor
	 */
	public function __construct($clientId, $locationId)
	{
		$this->clientId = $clientId;
		$this->locationId = $locationId;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => 'clientId',
			'LocationId' => 'locationId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => 'ClientId',
			'locationId' => 'LocationId',
			];
	}
}
