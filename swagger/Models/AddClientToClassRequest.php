<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AddClientToClassRequest extends BaseModel
{
	/**
	 * The ID of the client who is being booked into the class
	 * 
	 * @var string
	 */
	public $clientId;
	/**
	 * The ID of the class into which the client is being booked
	 * 
	 * @var integer
	 */
	public $classId;
	/**
	 * When `true`, indicates that input information is validated, but not
	 * committed.<br />  When `false`, the information is committed and the
	 * database is affected.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/**
	 * When `true`, the client must have an active, usable pricing option on
	 * their account.<br />  When `false` or omitted, an active pricing
	 * option is not required to complete the client’s booking.
	 * 
	 * @var boolean
	 */
	public $requirePayment;
	/**
	 * When `true`, indicates that the client should be added to a specific
	 * class waiting list.<br />  When `false`, the client should not be
	 * added to the waiting list.
	 * 
	 * @var boolean
	 */
	public $waitlist;
	/**
	 * When `true`, the subscriber’s configured Booking Confirmation
	 * automatic email is sent to the client. Note that an email is sent only
	 * if the client has an email address and automatic emails have been set
	 * up.<br />  When `false`, indicates that the client does not receive
	 * emails.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * The ID of the waiting list entry from which you are moving a client
	 * into a class.
	 * 
	 * @var integer
	 */
	public $waitlistEntryId;
	/**
	 * The ID of the pricing option on the client’s account that you want
	 * to use to pay for this booking, if payment is required at the time of
	 * the update.
	 * 
	 * @var integer
	 */
	public $clientServiceId;
	/**
	 * When `true`, cross regional series are checked and used if applicable.
	 * 
	 * @var boolean
	 */
	public $crossRegionalBooking;
	/**
	 * If the request is cross regional, use a purchased pricing option from
	 * this specified site. If omitted, an attempt is made to use an
	 * applicable pricing option from the local site.
	 * 
	 * @var integer
	 */
	public $crossRegionalBookingClientServiceSiteId;
	/**
	 * Constructor
	 */
	public function __construct($clientId, $classId)
	{
		$this->clientId = $clientId;
		$this->classId = $classId;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => 'clientId',
			'ClassId' => 'classId',
			'Test' => 'test',
			'RequirePayment' => 'requirePayment',
			'Waitlist' => 'waitlist',
			'SendEmail' => 'sendEmail',
			'WaitlistEntryId' => 'waitlistEntryId',
			'ClientServiceId' => 'clientServiceId',
			'CrossRegionalBooking' => 'crossRegionalBooking',
			'CrossRegionalBookingClientServiceSiteId' => 'crossRegionalBookingClientServiceSiteId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => 'ClientId',
			'classId' => 'ClassId',
			'test' => 'Test',
			'requirePayment' => 'RequirePayment',
			'waitlist' => 'Waitlist',
			'sendEmail' => 'SendEmail',
			'waitlistEntryId' => 'WaitlistEntryId',
			'clientServiceId' => 'ClientServiceId',
			'crossRegionalBooking' => 'CrossRegionalBooking',
			'crossRegionalBookingClientServiceSiteId' => 'CrossRegionalBookingClientServiceSiteId',
			];
	}
}
