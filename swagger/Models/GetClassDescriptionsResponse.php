<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetClassDescriptionsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the class descriptions.
	 * 
	 * @var ClassDescription[] 
	 */
	public $classDescriptions;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'ClassDescriptions' => ['classDescriptions', 'array', ClassDescription::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'classDescriptions' => ['ClassDescriptions', 'array', ClassDescription::class],
			];
	}
}
