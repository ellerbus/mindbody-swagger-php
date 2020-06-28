<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetCustomPaymentMethodsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the custom payment methods.
	 * 
	 * @var CustomPaymentMethod[]
	 */
	public $paymentMethods;
}
