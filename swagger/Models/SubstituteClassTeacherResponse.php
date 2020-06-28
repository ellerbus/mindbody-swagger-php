<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class SubstituteClassTeacherResponse extends BaseModel
{
	/**
	 * Contains information about the class that is being assigned a
	 * substitute teacher.
	 * 
	 * @var SubstituteTeacherClass 
	 */
	public $class;

	protected function getInputMap()
	{
		return [
			'Class' => ['class', SubstituteTeacherClass::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'class' => ['Class', SubstituteTeacherClass::class, null],
			];
	}
}
