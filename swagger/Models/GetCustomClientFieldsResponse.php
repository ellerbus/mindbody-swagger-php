<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetCustomClientFieldsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the available custom client fields.
	 * 
	 * @var CustomClientField[] 
	 */
	public $customClientFields;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'CustomClientFields' => ['customClientFields', 'array', CustomClientField::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'customClientFields' => ['CustomClientFields', 'array', CustomClientField::class],
			];
	}
}
