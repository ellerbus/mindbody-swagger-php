<?php

namespace App\MindBody\Models;

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
}
