from .base_model import BaseModel

from .program import Program

class ClientMembership(BaseModel):
	"""
	no description available

	Attributes:

		restricted_locations
		The locations that the membership is restricted to, if any.

		icon_code
		Text code that represents the `MembershipIcon`.

		membership_id
		The membership's ID.

		active_date
		The date that this pricing option became active and could be used to
		pay for services.

		count
		The number of service sessions this pricing option contained when
		first purchased.

		current
		When `true`, there are service sessions remaining on the pricing
		option that can be used pay for the current session.<br />  When
		`false`, the client cannot use this pricing option to pay for other
		services.

		expiration_date
		The date when the pricing option expires and can no longer be used to
		pay for services, even if unused service sessions remain on the
		option; expressed as UTC.

		id
		The unique ID assigned to this pricing option, specific to when it was
		purchased by the client.

		product_id
		The unique ID of this pricing option, not specific to any client's
		purchase of it.

		name
		The name of this pricing option.

		payment_date
		The date on which the client paid for this pricing option.

		program
		Contains information about the service category this service falls
		under.

		remaining
		The number of service sessions remaining in the pricing option that
		can still be used.

		site_id
		The ID of the subscriber site associated with this pricing option.

		action
		The action taken.
	"""

	input_map = {
		'RestrictedLocations': 'restricted_locations',
		'IconCode': 'icon_code',
		'MembershipId': 'membership_id',
		'ActiveDate': 'active_date',
		'Count': 'count',
		'Current': 'current',
		'ExpirationDate': 'expiration_date',
		'Id': 'id',
		'ProductId': 'product_id',
		'Name': 'name',
		'PaymentDate': 'payment_date',
		'Program': ('program', Program),
		'Remaining': 'remaining',
		'SiteId': 'site_id',
		'Action': 'action',
		}

	output_map = {
		'restricted_locations': 'RestrictedLocations',
		'icon_code': 'IconCode',
		'membership_id': 'MembershipId',
		'active_date': 'ActiveDate',
		'count': 'Count',
		'current': 'Current',
		'expiration_date': 'ExpirationDate',
		'id': 'Id',
		'product_id': 'ProductId',
		'name': 'Name',
		'payment_date': 'PaymentDate',
		'program': 'Program',
		'remaining': 'Remaining',
		'site_id': 'SiteId',
		'action': 'Action',
		}