<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AddClientResponse extends BaseModel
{
	/**
	 * Contains information about the client.
	 * 
	 * @var Client 
	 */
	public $client;

	protected function getInputMap()
	{
		return [
			'Client' => ['client', Client::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'client' => ['Client', Client::class, null],
			];
	}
}
