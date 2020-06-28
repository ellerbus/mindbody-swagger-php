<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassVisitsResponse extends BaseModel
{
	/**
	 * Contains class and booking information.
	 * 
	 * @var Class 
	 */
	public $class;

	protected function getInputMap()
	{
		return [
			'Class' => ['class', Class::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'class' => ['Class', Class::class, null],
			];
	}
}
