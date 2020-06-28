<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientReferralTypesResponse extends BaseModel
{
	/**
	 * The list of available referral types.
	 * 
	 * @var string[]
	 */
	public $referralTypes;

	protected function getInputMap()
	{
		return [
			'ReferralTypes' => 'referralTypes',
			];
	}

	protected function getOutputMap()
	{
		return [
			'referralTypes' => 'ReferralTypes',
			];
	}
}
