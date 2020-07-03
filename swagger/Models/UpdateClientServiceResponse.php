<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UpdateClientServiceResponse extends BaseModel
{
	/**
	 * Contains information about the updated service.
	 * 
	 * @var ClientService 
	 */
	public $clientService;

	protected function getInputMap()
	{
		return [
			'ClientService' => ['clientService', ClientService::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientService' => ['ClientService', ClientService::class, null],
			];
	}
}
