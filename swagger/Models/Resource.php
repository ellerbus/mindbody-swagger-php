<?php

namespace App\MindBody\Models;

/*
 * Contains information about resources, such as rooms.
 */
class Resource extends BaseModel
{
	/*
	 * The ID of the resource.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The name of the resource.
	 * 
	 * @var string
	 */
	public $name;
}
