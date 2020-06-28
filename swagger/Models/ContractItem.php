<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class ContractItem extends BaseModel
{
	/*
	 * The ID of the item.
	 * 
	 * @var string
	 */
	public $id;
	/*
	 * The name of the item.
	 * 
	 * @var string
	 */
	public $name;
	/*
	 * A description of the item.
	 * 
	 * @var string
	 */
	public $description;
	/*
	 * The type of the item.
	 * 
	 * @var string
	 */
	public $type;
	/*
	 * The price of the item.
	 * 
	 * @var number
	 */
	public $price;
	/*
	 * The quantity of the item.
	 * 
	 * @var integer
	 */
	public $quantity;
	/*
	 * When `true`, indicates that the item is charged only once.<br />  When
	 * `false`, indicates that the item is charged multiple times.
	 * 
	 * @var boolean
	 */
	public $oneTimeItem;
}