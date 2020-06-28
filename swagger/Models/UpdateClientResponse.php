<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UpdateClientResponse extends BaseModel
{
	/**
	 * Contains information about the updated client.
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
