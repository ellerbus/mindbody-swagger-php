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
	 * @var integer format:int32
	 */
	public $locationId;
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
			'ProductIds' => ['productIds', 'array', null],
			'SearchText' => ['searchText', 'string', null],
			'CategoryIds' => ['categoryIds', 'array', null],
			'SubCategoryIds' => ['subCategoryIds', 'array', null],
			'SellOnline' => ['sellOnline', 'boolean', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'productIds' => ['ProductIds', 'array', null],
			'searchText' => ['SearchText', 'string', null],
			'categoryIds' => ['CategoryIds', 'array', null],
			'subCategoryIds' => ['SubCategoryIds', 'array', null],
			'sellOnline' => ['SellOnline', 'boolean', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
