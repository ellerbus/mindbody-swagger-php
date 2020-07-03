<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetMembershipsResponse extends BaseModel
{
	/**
	 * Details about the memberships.
	 * 
	 * @var Membership[] 
	 */
	public $memberships;

	protected function getInputMap()
	{
		return [
			'Memberships' => ['memberships', 'array', Membership::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'memberships' => ['Memberships', 'array', Membership::class],
			];
	}
}
