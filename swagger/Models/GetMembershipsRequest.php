<?php

namespace App\MindBody\Models;

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
			'MembershipIds' => 'membershipIds',
			];
	}

	protected function getOutputMap()
	{
		return [
			'membershipIds' => 'MembershipIds',
			];
	}
}
