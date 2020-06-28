<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Product extends BaseModel
{
	/**
	 * The price of the product.
	 * 
	 * @var number format:double
	 */
	public $price;
	/**
	 * If tax inclusive-pricing is enabled, this field shows how much tax was
	 * added to the price.
	 * 
	 * @var number format:double
	 */
	public $taxIncluded;
	/**
	 * The tax rate that was applied to this purchase.
	 * 
	 * @var number format:double
	 */
	public $taxRate;
	/**
	 * The unique ID of the product variant, for example, a particular size
	 * and color combination.
	 * 
	 * @var string 
	 */
	public $id;
	/**
	 * The unique ID of the product group.
	 * 
	 * @var integer format:int32
	 */
	public $groupId;
	/**
	 * The name of the product.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * The online price of the product.
	 * 
	 * @var number format:double
	 */
	public $onlinePrice;
	/**
	 * A short description of the product.
	 * 
	 * @var string 
	 */
	public $shortDescription;
	/**
	 * A longer description of the product.
	 * 
	 * @var string 
	 */
	public $longDescription;
	/**
	 * The color of the product.
	 * 
	 * @var Color 
	 */
	public $color;
	/**
	 * Contains information about the size of the product.
	 * 
	 * @var Size 
	 */
	public $size;

	protected function getInputMap()
	{
		return [
			'Price' => ['price', 'number', 'double'],
			'TaxIncluded' => ['taxIncluded', 'number', 'double'],
			'TaxRate' => ['taxRate', 'number', 'double'],
			'Id' => ['id', 'string', null],
			'GroupId' => ['groupId', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'OnlinePrice' => ['onlinePrice', 'number', 'double'],
			'ShortDescription' => ['shortDescription', 'string', null],
			'LongDescription' => ['longDescription', 'string', null],
			'Color' => ['color', Color::class, null],
			'Size' => ['size', Size::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'price' => ['Price', 'number', 'double'],
			'taxIncluded' => ['TaxIncluded', 'number', 'double'],
			'taxRate' => ['TaxRate', 'number', 'double'],
			'id' => ['Id', 'string', null],
			'groupId' => ['GroupId', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'onlinePrice' => ['OnlinePrice', 'number', 'double'],
			'shortDescription' => ['ShortDescription', 'string', null],
			'longDescription' => ['LongDescription', 'string', null],
			'color' => ['Color', Color::class, null],
			'size' => ['Size', Size::class, null],
			];
	}
}
