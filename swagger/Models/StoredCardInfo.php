<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class StoredCardInfo extends BaseModel
{
	/**
	 * no description available
	 * 
	 * @var string
	 */
	public $lastFour;

	protected function getInputMap()
	{
		return [
			'LastFour' => 'lastFour',
			];
	}

	protected function getOutputMap()
	{
		return [
			'lastFour' => 'LastFour',
			];
	}
}
