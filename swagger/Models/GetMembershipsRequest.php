<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetMembershipsRequest extends BaseModel
{
	/**
	 * Filters results to memberships that belong to one of the given
	 * membership IDs. If omitted, all memberships are returned.
	 * 
	 * @var integer[] 
	 */
	public $membershipIds;

	protected function getInputMap()
	{
		return [
			'MembershipIds' => ['membershipIds', 'array', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'membershipIds' => ['MembershipIds', 'array', null],
			];
	}
}
