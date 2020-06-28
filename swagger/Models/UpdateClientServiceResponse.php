<?php

namespace App\MindBody\Models;

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
			'ClientService' => ['clientService', ClientService::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientService' => 'ClientService',
			];
	}
}
