<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class RemoveClientFromClassResponse extends BaseModel
{
	/**
	 * Contains information about the class from which the client was
	 * removed.
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
