<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassVisitsRequest extends BaseModel
{
	/**
	 * The class ID.
	 * 
	 * @var integer format:int64
	 */
	public $classId;
	/**
	 * When included in the request, only records modified on or after the
	 * `LastModifiedDate` specified are included in the response.
	 * 
	 * @var string format:date-time
	 */
	public $lastModifiedDate;

	protected function getInputMap()
	{
		return [
			'ClassID' => ['classId', 'integer', 'int64'],
			'LastModifiedDate' => ['lastModifiedDate', 'string', 'date-time'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classId' => ['ClassID', 'integer', 'int64'],
			'lastModifiedDate' => ['LastModifiedDate', 'string', 'date-time'],
			];
	}
}
