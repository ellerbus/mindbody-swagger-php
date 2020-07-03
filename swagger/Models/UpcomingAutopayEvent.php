<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UpcomingAutopayEvent extends BaseModel
{
	/**
	 * The ID of the contract.
	 * 
	 * @var integer format:int32
	 */
	public $clientContractId;
	/**
	 * The amount charged.
	 * 
	 * @var number format:double
	 */
	public $chargeAmount;
	/**
	 * The payment method.
	 * 
	 * @var string 
	 */
	public $paymentMethod;
	/**
	 * The date and time of the next payment.
	 * 
	 * @var string format:date-time
	 */
	public $scheduleDate;

	protected function getInputMap()
	{
		return [
			'ClientContractId' => ['clientContractId', 'integer', 'int32'],
			'ChargeAmount' => ['chargeAmount', 'number', 'double'],
			'PaymentMethod' => ['paymentMethod', 'string', null],
			'ScheduleDate' => ['scheduleDate', 'string', 'date-time'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientContractId' => ['ClientContractId', 'integer', 'int32'],
			'chargeAmount' => ['ChargeAmount', 'number', 'double'],
			'paymentMethod' => ['PaymentMethod', 'string', null],
			'scheduleDate' => ['ScheduleDate', 'string', 'date-time'],
			];
	}
}
