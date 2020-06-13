from .base_model import BaseModel

from .program_membership import ProgramMembership

class Membership(BaseModel):
	"""
	no description available

	Attributes:

		membership_id
		The membership id.

		membership_name
		The membership name.

		priority
		The priority/sort order.

		member_retail_discount
		The membership discount for retail as a percentage.

		member_service_discount
		The membership discount for services as a percentage.

		allow_clients_to_schedule_unpaid
		Allow clients in this membership to schedule unpaid.

		online_booking_restricted_to_members_only
		List of programs that are restricted to clients in this membership
		only.

		day_of_month_scheduling_opens_for_next_month
		Day of month scheduling opens for next month.  Unrestricted is a null
		value.

		restrict_self_sign_in_to_members_only
		Restrict self sign in to members only.

		allow_members_to_book_appointments_without_paying
		Allow members to book appointments without paying.

		allow_members_to_purchase_non_members_services
		Allow members to purchase non-members services.

		allow_members_to_purchase_non_members_products
		Allow members to purchase non-members products.

		is_active
		Indicates if the membership is active.
	"""

	input_map = {
		'MembershipId': 'membership_id',
		'MembershipName': 'membership_name',
		'Priority': 'priority',
		'MemberRetailDiscount': 'member_retail_discount',
		'MemberServiceDiscount': 'member_service_discount',
		'AllowClientsToScheduleUnpaid': 'allow_clients_to_schedule_unpaid',
		'OnlineBookingRestrictedToMembersOnly': ['online_booking_restricted_to_members_only', ProgramMembership],
		'DayOfMonthSchedulingOpensForNextMonth': 'day_of_month_scheduling_opens_for_next_month',
		'RestrictSelfSignInToMembersOnly': 'restrict_self_sign_in_to_members_only',
		'AllowMembersToBookAppointmentsWithoutPaying': 'allow_members_to_book_appointments_without_paying',
		'AllowMembersToPurchaseNonMembersServices': 'allow_members_to_purchase_non_members_services',
		'AllowMembersToPurchaseNonMembersProducts': 'allow_members_to_purchase_non_members_products',
		'IsActive': 'is_active',
		}

	output_map = {
		'membership_id': 'MembershipId',
		'membership_name': 'MembershipName',
		'priority': 'Priority',
		'member_retail_discount': 'MemberRetailDiscount',
		'member_service_discount': 'MemberServiceDiscount',
		'allow_clients_to_schedule_unpaid': 'AllowClientsToScheduleUnpaid',
		'online_booking_restricted_to_members_only': 'OnlineBookingRestrictedToMembersOnly',
		'day_of_month_scheduling_opens_for_next_month': 'DayOfMonthSchedulingOpensForNextMonth',
		'restrict_self_sign_in_to_members_only': 'RestrictSelfSignInToMembersOnly',
		'allow_members_to_book_appointments_without_paying': 'AllowMembersToBookAppointmentsWithoutPaying',
		'allow_members_to_purchase_non_members_services': 'AllowMembersToPurchaseNonMembersServices',
		'allow_members_to_purchase_non_members_products': 'AllowMembersToPurchaseNonMembersProducts',
		'is_active': 'IsActive',
		}

	membership_id = None
	membership_name = None
	priority = None
	member_retail_discount = None
	member_service_discount = None
	allow_clients_to_schedule_unpaid = None
	online_booking_restricted_to_members_only = None
	day_of_month_scheduling_opens_for_next_month = None
	restrict_self_sign_in_to_members_only = None
	allow_members_to_book_appointments_without_paying = None
	allow_members_to_purchase_non_members_services = None
	allow_members_to_purchase_non_members_products = None
	is_active = None

