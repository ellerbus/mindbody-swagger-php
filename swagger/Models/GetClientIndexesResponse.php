<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientIndexesResponse extends BaseModel
{
	/**
	 * Contains information about the client indexes.
	 * 
	 * @var ClientIndex[] 
	 */
	public $clientIndexes;

	protected function getInputMap()
	{
		return [
			'ClientIndexes' => ['clientIndexes', 'array', ClientIndex::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientIndexes' => ['ClientIndexes', 'array', ClientIndex::class],
			];
	}
}
