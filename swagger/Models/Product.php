<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class Product extends BaseModel
{
	/*
	 * The price of the product.
	 * 
	 * @var number
	 */
	public $price;
	/*
	 * If tax inclusive-pricing is enabled, this field shows how much tax was
	 * added to the price.
	 * 
	 * @var number
	 */
	public $taxIncluded;
	/*
	 * The tax rate that was applied to this purchase.
	 * 
	 * @var number
	 */
	public $taxRate;
	/*
	 * The unique ID of the product variant, for example, a particular size
	 * and color combination.
	 * 
	 * @var string
	 */
	public $id;
	/*
	 * The unique ID of the product group.
	 * 
	 * @var integer
	 */
	public $groupId;
	/*
	 * The name of the product.
	 * 
	 * @var string
	 */
	public $name;
	/*
	 * The online price of the product.
	 * 
	 * @var number
	 */
	public $onlinePrice;
	/*
	 * A short description of the product.
	 * 
	 * @var string
	 */
	public $shortDescription;
	/*
	 * A longer description of the product.
	 * 
	 * @var string
	 */
	public $longDescription;
	/*
	 * The color of the product.
	 * 
	 * @var Color
	 */
	public $color;
	/*
	 * Contains information about the size of the product.
	 * 
	 * @var Size
	 */
	public $size;
}
