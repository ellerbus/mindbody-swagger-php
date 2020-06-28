<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Service extends BaseModel
{
	/**
	 * The cost of the pricing option when sold at a physical location.
	 * 
	 * @var number
	 */
	public $price;
	/**
	 * The cost of the pricing option when sold online.
	 * 
	 * @var number
	 */
	public $onlinePrice;
	/**
	 * The amount of tax included in the price, if inclusive pricing is
	 * enabled.
	 * 
	 * @var number
	 */
	public $taxIncluded;
	/**
	 * The ID of the program that this pricing option applies to.
	 * 
	 * @var integer
	 */
	public $programId;
	/**
	 * The tax rate applied to the pricing option. This field is populated
	 * only when you include a `LocationID` in the request.
	 * 
	 * @var number
	 */
	public $taxRate;
	/**
	 * The unique ID of the pricing option.
	 * 
	 * @var integer
	 */
	public $productId;
	/**
	 * The barcode ID of the pricing option.
	 * 
	 * @var string
	 */
	public $id;
	/**
	 * The name of the pricing option.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * The initial count of usages available for the pricing option.
	 * 
	 * @var integer
	 */
	public $count;
}
