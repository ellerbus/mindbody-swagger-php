<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetProductsRequest extends BaseModel
{
	/**
	 * An ID filter for products.
	 * 
	 * @var string[]
	 */
	public $productIds;
	/**
	 * A search filter, used for searching by term.
	 * 
	 * @var string
	 */
	public $searchText;
	/**
	 * A list of category IDs to filter by.
	 * 
	 * @var integer[]
	 */
	public $categoryIds;
	/**
	 * A list of subcategory IDs to filter by.
	 * 
	 * @var integer[]
	 */
	public $subCategoryIds;
	/**
	 * When `true`, only products that can be sold online are returned.<br />
	 * When `false`, all products are returned.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $sellOnline;
	/**
	 * The location ID to use to determine the tax for the products that this
	 * request returns.<br />  Default: **online store**
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
}
