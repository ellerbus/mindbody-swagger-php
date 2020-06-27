<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetProductsResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about the products.
	 * 
	 * @var Product[]
	 */
	public $products;
}
