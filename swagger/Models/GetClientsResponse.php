<?php

namespace App\Mindbody\Models;

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
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Clients' => ['clients', 'array', Client::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'clients' => ['Clients', 'array', Client::class],
			];
	}
}
