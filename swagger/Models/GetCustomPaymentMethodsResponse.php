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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'PaymentMethods' => ['paymentMethods', 'array', CustomPaymentMethod::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'paymentMethods' => ['PaymentMethods', 'array', CustomPaymentMethod::class],
			];
	}
}
