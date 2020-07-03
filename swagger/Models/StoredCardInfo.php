<?php

namespace App\Mindbody\Models;

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
			'LastFour' => ['lastFour', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'lastFour' => ['LastFour', 'string', null],
			];
	}
}
