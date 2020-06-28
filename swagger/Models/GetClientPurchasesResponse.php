<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientPurchasesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information that describes the item sold and the payment.
	 * 
	 * @var ClientPurchaseRecord[]
	 */
	public $purchases;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Purchases' => ['purchases', ClientPurchaseRecord::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'purchases' => 'Purchases',
			];
	}
}
