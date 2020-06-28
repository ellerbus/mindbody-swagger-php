<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * The requested clients.
	 * 
	 * @var Client[]
	 */
	public $clients;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Clients' => ['clients', Client::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'clients' => 'Clients',
			];
	}
}
