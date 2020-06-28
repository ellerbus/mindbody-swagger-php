<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientServicesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about client pricing options.
	 * 
	 * @var ClientService[] 
	 */
	public $clientServices;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'ClientServices' => ['clientServices', 'array', ClientService::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'clientServices' => ['ClientServices', 'array', ClientService::class],
			];
	}
}
