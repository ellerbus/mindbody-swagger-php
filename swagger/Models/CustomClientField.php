<?php

namespace App\MindBody\Models;

/*
 * A custom client field
 */
class CustomClientField extends BaseModel
{
	/*
	 * The ID of the custom client field.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The data type of the field.
	 * 
	 * @var string
	 */
	public $dataType;
	/*
	 * The name of the field.
	 * 
	 * @var string
	 */
	public $name;
}
