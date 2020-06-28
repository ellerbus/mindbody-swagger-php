<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetCustomPaymentMethodsRequest extends BaseModel
{
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
