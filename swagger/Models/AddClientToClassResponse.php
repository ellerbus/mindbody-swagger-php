<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class AddClientToClassResponse extends BaseModel
{
	/**
	 * Contains information about the created visit.
	 * 
	 * @var AddClientToClassVisit 
	 */
	public $visit;

	protected function getInputMap()
	{
		return [
			'Visit' => ['visit', AddClientToClassVisit::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'visit' => ['Visit', AddClientToClassVisit::class, null],
			];
	}
}
