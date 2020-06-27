<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClassVisitsRequest extends BaseModel
{
	/*
	 * The class ID.
	 * 
	 * @var integer
	 */
	public $classId;
	/*
	 * When included in the request, only records modified on or after the
	 * `LastModifiedDate` specified are included in the response.
	 * 
	 * @var string
	 */
	public $lastModifiedDate;
}
