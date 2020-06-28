<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UpcomingAutopayEvent extends BaseModel
{
	/**
	 * The ID of the contract.
	 * 
	 * @var integer
	 */
	public $clientContractId;
	/**
	 * The amount charged.
	 * 
	 * @var number
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
	 * @var string
	 */
	public $scheduleDate;

	protected function getInputMap()
	{
		return [
			'ClientContractId' => 'clientContractId',
			'ChargeAmount' => 'chargeAmount',
			'PaymentMethod' => 'paymentMethod',
			'ScheduleDate' => 'scheduleDate',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientContractId' => 'ClientContractId',
			'chargeAmount' => 'ChargeAmount',
			'paymentMethod' => 'PaymentMethod',
			'scheduleDate' => 'ScheduleDate',
			];
	}
}
