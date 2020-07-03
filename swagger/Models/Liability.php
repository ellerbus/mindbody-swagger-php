<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class Liability extends BaseModel
{
	/**
	 * The date and time at which the client agreed to the liability waiver
	 * for the business.
	 * 
	 * @var string format:date-time
	 */
	public $agreementDate;
	/**
	 * The client’s liability release status.<br />  When `true`, indicates
	 * that the client has agreed to the liability release for the
	 * business.<br />  When `false`, indicates that the client has not
	 * agreed to the liability release for the business.
	 * 
	 * @var boolean 
	 */
	public $isReleased;
	/**
	 * An ID indicating who released liability for the client. If the client
	 * agreed to the liability waiver by signing into an account online, this
	 * value is `null`. If a staff member marked the waiver as signed on
	 * behalf of the client, it is the staff member’s ID. `0` indicates
	 * that the business owner marked the liability waiver as signed on
	 * behalf of the client.
	 * 
	 * @var integer format:int64
	 */
	public $releasedBy;

	protected function getInputMap()
	{
		return [
			'AgreementDate' => ['agreementDate', 'string', 'date-time'],
			'IsReleased' => ['isReleased', 'boolean', null],
			'ReleasedBy' => ['releasedBy', 'integer', 'int64'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'agreementDate' => ['AgreementDate', 'string', 'date-time'],
			'isReleased' => ['IsReleased', 'boolean', null],
			'releasedBy' => ['ReleasedBy', 'integer', 'int64'],
			];
	}
}
