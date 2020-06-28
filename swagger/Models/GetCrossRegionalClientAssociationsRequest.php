<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetCrossRegionalClientAssociationsRequest extends BaseModel
{
	/**
	 * Looks up the cross regional associations by the client’s ID. Either
	 * `ClientId` or `Email` must be provided. If both are provided, the
	 * `ClientId` is used by default.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * Looks up the cross regional associations by the client’s email
	 * address. Either `ClientId` or `Email` must be provided. If both are
	 * provided, the `ClientId` is used by default.
	 * 
	 * @var string 
	 */
	public $email;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'Email' => ['email', 'string', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'email' => ['Email', 'string', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
