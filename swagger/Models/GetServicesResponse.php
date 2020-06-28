<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetServicesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the services.
	 * 
	 * @var Service[]
	 */
	public $services;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Services' => ['services', Service::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'services' => 'Services',
			];
	}
}
