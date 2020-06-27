<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class Membership extends BaseModel
{
	/*
	 * The membership id.
	 * 
	 * @var integer
	 */
	public $membershipId;
	/*
	 * The membership name.
	 * 
	 * @var string
	 */
	public $membershipName;
	/*
	 * The priority/sort order.
	 * 
	 * @var integer
	 */
	public $priority;
	/*
	 * The membership discount for retail as a percentage.
	 * 
	 * @var number
	 */
	public $memberRetailDiscount;
	/*
	 * The membership discount for services as a percentage.
	 * 
	 * @var number
	 */
	public $memberServiceDiscount;
	/*
	 * Allow clients in this membership to schedule unpaid.
	 * 
	 * @var boolean
	 */
	public $allowClientsToScheduleUnpaid;
	/*
	 * List of programs that are restricted to clients in this membership
	 * only.
	 * 
	 * @var ProgramMembership[]
	 */
	public $onlineBookingRestrictedToMembersOnly;
	/*
	 * Day of month scheduling opens for next month.  Unrestricted is a null
	 * value.
	 * 
	 * @var integer
	 */
	public $dayOfMonthSchedulingOpensForNextMonth;
	/*
	 * Restrict self sign in to members only.
	 * 
	 * @var boolean
	 */
	public $restrictSelfSignInToMembersOnly;
	/*
	 * Allow members to book appointments without paying.
	 * 
	 * @var boolean
	 */
	public $allowMembersToBookAppointmentsWithoutPaying;
	/*
	 * Allow members to purchase non-members services.
	 * 
	 * @var boolean
	 */
	public $allowMembersToPurchaseNonMembersServices;
	/*
	 * Allow members to purchase non-members products.
	 * 
	 * @var boolean
	 */
	public $allowMembersToPurchaseNonMembersProducts;
	/*
	 * Indicates if the membership is active.
	 * 
	 * @var boolean
	 */
	public $isActive;
}
