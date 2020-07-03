<?php

namespace App\Mindbody\Models;

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
			'ReferralTypes' => ['referralTypes', 'array', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'referralTypes' => ['ReferralTypes', 'array', null],
			];
	}
}
