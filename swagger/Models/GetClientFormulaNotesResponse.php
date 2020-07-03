<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetClientFormulaNotesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains details about the client’s formula.
	 * 
	 * @var FormulaNote[] 
	 */
	public $formulaNotes;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'FormulaNotes' => ['formulaNotes', 'array', FormulaNote::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'formulaNotes' => ['FormulaNotes', 'array', FormulaNote::class],
			];
	}
}
