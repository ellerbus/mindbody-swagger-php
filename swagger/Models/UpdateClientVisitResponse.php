<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UpdateClientVisitResponse extends BaseModel
{
	/**
	 * The updated visit.
	 * 
	 * @var Visit
	 */
	public $visit;

	protected function getInputMap()
	{
		return [
			'Visit' => ['visit', Visit::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'visit' => 'Visit',
			];
	}
}
