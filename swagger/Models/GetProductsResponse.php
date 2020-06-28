<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetProductsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the products.
	 * 
	 * @var Product[]
	 */
	public $products;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Products' => ['products', Product::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'products' => 'Products',
			];
	}
}
