<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * A list of the requested classes.
	 * 
	 * @var Class[] 
	 */
	public $classes;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Classes' => ['classes', 'array', Class::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'classes' => ['Classes', 'array', Class::class],
			];
	}
}
