<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class ContractItem extends BaseModel
{
	/**
	 * The ID of the item.
	 * 
	 * @var string 
	 */
	public $id;
	/**
	 * The name of the item.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * A description of the item.
	 * 
	 * @var string 
	 */
	public $description;
	/**
	 * The type of the item.
	 * 
	 * @var string 
	 */
	public $type;
	/**
	 * The price of the item.
	 * 
	 * @var number format:double
	 */
	public $price;
	/**
	 * The quantity of the item.
	 * 
	 * @var integer format:int32
	 */
	public $quantity;
	/**
	 * When `true`, indicates that the item is charged only once.<br />  When
	 * `false`, indicates that the item is charged multiple times.
	 * 
	 * @var boolean 
	 */
	public $oneTimeItem;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'string', null],
			'Name' => ['name', 'string', null],
			'Description' => ['description', 'string', null],
			'Type' => ['type', 'string', null],
			'Price' => ['price', 'number', 'double'],
			'Quantity' => ['quantity', 'integer', 'int32'],
			'OneTimeItem' => ['oneTimeItem', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'string', null],
			'name' => ['Name', 'string', null],
			'description' => ['Description', 'string', null],
			'type' => ['Type', 'string', null],
			'price' => ['Price', 'number', 'double'],
			'quantity' => ['Quantity', 'integer', 'int32'],
			'oneTimeItem' => ['OneTimeItem', 'boolean', null],
			];
	}
}
