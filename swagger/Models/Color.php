<?php

namespace App\MindBody\Models;

/*
 * A color used by products.
 */
class Color extends BaseModel
{
	/*
	 * The ID of the product color.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The name of the product color.
	 * 
	 * @var string
	 */
	public $name;
}
