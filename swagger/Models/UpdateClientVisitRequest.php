<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class UpdateClientVisitRequest extends BaseModel
{
	/*
	 * The ID of the visit to be updated.
	 * 
	 * @var integer
	 */
	public $visitId;
	/*
	 * When `true`, indicates that the visit is eligible to be made up.
	 * 
	 * @var boolean
	 */
	public $makeup;
	/*
	 * When `true`, indicates that the client has signed in for the visit.
	 * 
	 * @var boolean
	 */
	public $signedIn;
	/*
	 * The execute code used to update this visit. Possible values are:  *
	 * Cancel  * Latecancel  * Unlatecancel
	 * 
	 * @var string
	 */
	public $execute;
	/*
	 * When `true`, indicates that test mode is enabled. When test mode is
	 * enabled, input information is validated, but not committed.<br />
	 * Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * When `true`, indicates that the client should be sent an email for
	 * cancellations. Note that email is not sent unless the client has an
	 * email address and automatic emails have been set up correctly.<br />
	 * Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendEmail;
	/*
	 *
	 */
	public function __construct($visitId)
	{
		$this->visitId = $visitId;
	}
}
