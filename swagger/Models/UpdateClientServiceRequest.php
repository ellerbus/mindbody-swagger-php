<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class UpdateClientServiceRequest extends BaseModel
{
	/*
	 * The ID of the service to update.
	 * 
	 * @var integer
	 */
	public $serviceId;
	/*
	 * The date that the service became active.
	 * 
	 * @var string
	 */
	public $activeDate;
	/*
	 * The date that the service is to expire.
	 * 
	 * @var string
	 */
	public $expirationDate;
	/*
	 * When `true`, indicates that input information is to be validated, but
	 * not committed.<br />  When `false` or omitted, the database is
	 * affected.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * Constructor
	 */
	public function __construct($serviceId)
	{
		$this->serviceId = $serviceId;
	}
}
