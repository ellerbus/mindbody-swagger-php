<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AddArrivalResponse extends BaseModel
{
	/**
	 * When `true`, indicates that the arrival was added to the database.
	 * 
	 * @var boolean
	 */
	public $arrivalAdded;
	/**
	 * Contains information about the pricing option being used to pay for
	 * the client’s current service session.
	 * 
	 * @var ClientService
	 */
	public $clientService;

	protected function getInputMap()
	{
		return [
			'ArrivalAdded' => 'arrivalAdded',
			'ClientService' => ['clientService', ClientService::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'arrivalAdded' => 'ArrivalAdded',
			'clientService' => 'ClientService',
			];
	}
}
