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
	 * @var number format:double
	 */
	public $price;
	/**
	 * The cost of the pricing option when sold online.
	 * 
	 * @var number format:double
	 */
	public $onlinePrice;
	/**
	 * The amount of tax included in the price, if inclusive pricing is
	 * enabled.
	 * 
	 * @var number format:double
	 */
	public $taxIncluded;
	/**
	 * The ID of the program that this pricing option applies to.
	 * 
	 * @var integer format:int32
	 */
	public $programId;
	/**
	 * The tax rate applied to the pricing option. This field is populated
	 * only when you include a `LocationID` in the request.
	 * 
	 * @var number format:double
	 */
	public $taxRate;
	/**
	 * The unique ID of the pricing option.
	 * 
	 * @var integer format:int32
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
	 * @var integer format:int32
	 */
	public $count;

	protected function getInputMap()
	{
		return [
			'Price' => ['price', 'number', 'double'],
			'OnlinePrice' => ['onlinePrice', 'number', 'double'],
			'TaxIncluded' => ['taxIncluded', 'number', 'double'],
			'ProgramId' => ['programId', 'integer', 'int32'],
			'TaxRate' => ['taxRate', 'number', 'double'],
			'ProductId' => ['productId', 'integer', 'int32'],
			'Id' => ['id', 'string', null],
			'Name' => ['name', 'string', null],
			'Count' => ['count', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'price' => ['Price', 'number', 'double'],
			'onlinePrice' => ['OnlinePrice', 'number', 'double'],
			'taxIncluded' => ['TaxIncluded', 'number', 'double'],
			'programId' => ['ProgramId', 'integer', 'int32'],
			'taxRate' => ['TaxRate', 'number', 'double'],
			'productId' => ['ProductId', 'integer', 'int32'],
			'id' => ['Id', 'string', null],
			'name' => ['Name', 'string', null],
			'count' => ['Count', 'integer', 'int32'],
			];
	}
}
