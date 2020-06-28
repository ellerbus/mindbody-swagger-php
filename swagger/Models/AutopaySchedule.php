<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AutopaySchedule extends BaseModel
{
	/**
	 * Defines how often clients are charged. Possible values are:  *
	 * SetNumberOfAutopays  * MonthToMonth
	 * 
	 * @var string
	 */
	public $frequencyType;
	/**
	 * The interval of AutoPay frequency, combined with `FrequencyTimeUnit`.
	 * This value is null if `FrequencyType` is `MonthToMonth`.
	 * 
	 * @var integer
	 */
	public $frequencyValue;
	/**
	 * Defines the time unit that sets how often to run the AutoPay, combined
	 * with `FrequencyValue`. This value is null if `FrequencyType` is
	 * `MonthToMonth`. Possible values are:  * Weekly  * Monthly  * Yearly
	 * 
	 * @var string
	 */
	public $frequencyTimeUnit;

	protected function getInputMap()
	{
		return [
			'FrequencyType' => 'frequencyType',
			'FrequencyValue' => 'frequencyValue',
			'FrequencyTimeUnit' => 'frequencyTimeUnit',
			];
	}

	protected function getOutputMap()
	{
		return [
			'frequencyType' => 'FrequencyType',
			'frequencyValue' => 'FrequencyValue',
			'frequencyTimeUnit' => 'FrequencyTimeUnit',
			];
	}
}
