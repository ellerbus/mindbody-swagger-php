<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetRequiredClientFieldsResponse extends BaseModel
{
	/**
	 * A list of strings that maps to the client fields that are required by
	 * the site.
	 * 
	 * @var string[] 
	 */
	public $requiredClientFields;

	protected function getInputMap()
	{
		return [
			'RequiredClientFields' => ['requiredClientFields', 'array', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'requiredClientFields' => ['RequiredClientFields', 'array', null],
			];
	}
}
