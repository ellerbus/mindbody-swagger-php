<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UpdateClientServiceRequest extends BaseModel
{
	/**
	 * The ID of the service to update.
	 * 
	 * @var integer format:int32
	 */
	public $serviceId;
	/**
	 * The date that the service became active.
	 * 
	 * @var string format:date-time
	 */
	public $activeDate;
	/**
	 * The date that the service is to expire.
	 * 
	 * @var string format:date-time
	 */
	public $expirationDate;
	/**
	 * When `true`, indicates that input information is to be validated, but
	 * not committed.<br />  When `false` or omitted, the database is
	 * affected.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * Constructor
	 */
	public function __construct($serviceId)
	{
		$this->serviceId = $serviceId;
	}

	protected function getInputMap()
	{
		return [
			'ServiceId' => ['serviceId', 'integer', 'int32'],
			'ActiveDate' => ['activeDate', 'string', 'date-time'],
			'ExpirationDate' => ['expirationDate', 'string', 'date-time'],
			'Test' => ['test', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'serviceId' => ['ServiceId', 'integer', 'int32'],
			'activeDate' => ['ActiveDate', 'string', 'date-time'],
			'expirationDate' => ['ExpirationDate', 'string', 'date-time'],
			'test' => ['Test', 'boolean', null],
			];
	}
}
