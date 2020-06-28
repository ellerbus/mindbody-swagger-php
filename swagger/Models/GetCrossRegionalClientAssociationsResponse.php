<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetCrossRegionalClientAssociationsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the client’s cross regional associations.
	 * 
	 * @var CrossRegionalClientAssociation[]
	 */
	public $crossRegionalClientAssociations;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'CrossRegionalClientAssociations' => ['crossRegionalClientAssociations', CrossRegionalClientAssociation::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'crossRegionalClientAssociations' => 'CrossRegionalClientAssociations',
			];
	}
}
