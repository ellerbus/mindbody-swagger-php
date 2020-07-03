<?php

namespace App\Mindbody\Models;

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
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Purchases' => ['purchases', 'array', ClientPurchaseRecord::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'purchases' => ['Purchases', 'array', ClientPurchaseRecord::class],
			];
	}
}
