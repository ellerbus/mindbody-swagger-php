<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Membership extends BaseModel
{
	/**
	 * The membership id.
	 * 
	 * @var integer format:int32
	 */
	public $membershipId;
	/**
	 * The membership name.
	 * 
	 * @var string 
	 */
	public $membershipName;
	/**
	 * The priority/sort order.
	 * 
	 * @var integer format:int32
	 */
	public $priority;
	/**
	 * The membership discount for retail as a percentage.
	 * 
	 * @var number format:double
	 */
	public $memberRetailDiscount;
	/**
	 * The membership discount for services as a percentage.
	 * 
	 * @var number format:double
	 */
	public $memberServiceDiscount;
	/**
	 * Allow clients in this membership to schedule unpaid.
	 * 
	 * @var boolean 
	 */
	public $allowClientsToScheduleUnpaid;
	/**
	 * List of programs that are restricted to clients in this membership
	 * only.
	 * 
	 * @var ProgramMembership[] 
	 */
	public $onlineBookingRestrictedToMembersOnly;
	/**
	 * Day of month scheduling opens for next month.  Unrestricted is a null
	 * value.
	 * 
	 * @var integer format:int32
	 */
	public $dayOfMonthSchedulingOpensForNextMonth;
	/**
	 * Restrict self sign in to members only.
	 * 
	 * @var boolean 
	 */
	public $restrictSelfSignInToMembersOnly;
	/**
	 * Allow members to book appointments without paying.
	 * 
	 * @var boolean 
	 */
	public $allowMembersToBookAppointmentsWithoutPaying;
	/**
	 * Allow members to purchase non-members services.
	 * 
	 * @var boolean 
	 */
	public $allowMembersToPurchaseNonMembersServices;
	/**
	 * Allow members to purchase non-members products.
	 * 
	 * @var boolean 
	 */
	public $allowMembersToPurchaseNonMembersProducts;
	/**
	 * Indicates if the membership is active.
	 * 
	 * @var boolean 
	 */
	public $isActive;

	protected function getInputMap()
	{
		return [
			'MembershipId' => ['membershipId', 'integer', 'int32'],
			'MembershipName' => ['membershipName', 'string', null],
			'Priority' => ['priority', 'integer', 'int32'],
			'MemberRetailDiscount' => ['memberRetailDiscount', 'number', 'double'],
			'MemberServiceDiscount' => ['memberServiceDiscount', 'number', 'double'],
			'AllowClientsToScheduleUnpaid' => ['allowClientsToScheduleUnpaid', 'boolean', null],
			'OnlineBookingRestrictedToMembersOnly' => ['onlineBookingRestrictedToMembersOnly', 'array', ProgramMembership::class],
			'DayOfMonthSchedulingOpensForNextMonth' => ['dayOfMonthSchedulingOpensForNextMonth', 'integer', 'int32'],
			'RestrictSelfSignInToMembersOnly' => ['restrictSelfSignInToMembersOnly', 'boolean', null],
			'AllowMembersToBookAppointmentsWithoutPaying' => ['allowMembersToBookAppointmentsWithoutPaying', 'boolean', null],
			'AllowMembersToPurchaseNonMembersServices' => ['allowMembersToPurchaseNonMembersServices', 'boolean', null],
			'AllowMembersToPurchaseNonMembersProducts' => ['allowMembersToPurchaseNonMembersProducts', 'boolean', null],
			'IsActive' => ['isActive', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'membershipId' => ['MembershipId', 'integer', 'int32'],
			'membershipName' => ['MembershipName', 'string', null],
			'priority' => ['Priority', 'integer', 'int32'],
			'memberRetailDiscount' => ['MemberRetailDiscount', 'number', 'double'],
			'memberServiceDiscount' => ['MemberServiceDiscount', 'number', 'double'],
			'allowClientsToScheduleUnpaid' => ['AllowClientsToScheduleUnpaid', 'boolean', null],
			'onlineBookingRestrictedToMembersOnly' => ['OnlineBookingRestrictedToMembersOnly', 'array', ProgramMembership::class],
			'dayOfMonthSchedulingOpensForNextMonth' => ['DayOfMonthSchedulingOpensForNextMonth', 'integer', 'int32'],
			'restrictSelfSignInToMembersOnly' => ['RestrictSelfSignInToMembersOnly', 'boolean', null],
			'allowMembersToBookAppointmentsWithoutPaying' => ['AllowMembersToBookAppointmentsWithoutPaying', 'boolean', null],
			'allowMembersToPurchaseNonMembersServices' => ['AllowMembersToPurchaseNonMembersServices', 'boolean', null],
			'allowMembersToPurchaseNonMembersProducts' => ['AllowMembersToPurchaseNonMembersProducts', 'boolean', null],
			'isActive' => ['IsActive', 'boolean', null],
			];
	}
}
