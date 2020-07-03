<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetProgramsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the programs.
	 * 
	 * @var Program[] 
	 */
	public $programs;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Programs' => ['programs', 'array', Program::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'programs' => ['Programs', 'array', Program::class],
			];
	}
}
