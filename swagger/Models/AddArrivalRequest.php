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
	 * @var integer format:int32
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
			'ClientId' => ['clientId', 'string', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			];
	}
}
