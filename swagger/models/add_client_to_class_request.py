from .base_model import BaseModel


class AddClientToClassRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client who is being booked into the class

		class_id
		The ID of the class into which the client is being booked

		test
		When `true`, indicates that input information is validated, but not
		committed.<br />  When `false`, the information is committed and the
		database is affected.<br />  Default: **false**

		require_payment
		When `true`, the client must have an active, usable pricing option on
		their account.<br />  When `false` or omitted, an active pricing
		option is not required to complete the client’s booking.

		waitlist
		When `true`, indicates that the client should be added to a specific
		class waiting list.<br />  When `false`, the client should not be
		added to the waiting list.

		send_email
		When `true`, the subscriber’s configured Booking Confirmation
		automatic email is sent to the client. Note that an email is sent only
		if the client has an email address and automatic emails have been set
		up.<br />  When `false`, indicates that the client does not receive
		emails.<br />  Default: **false**

		waitlist_entry_id
		The ID of the waiting list entry from which you are moving a client
		into a class.

		client_service_id
		The ID of the pricing option on the client’s account that you want
		to use to pay for this booking, if payment is required at the time of
		the update.

		cross_regional_booking
		When `true`, cross regional series are checked and used if applicable.

		cross_regional_booking_client_service_site_id
		If the request is cross regional, use a purchased pricing option from
		this specified site. If omitted, an attempt is made to use an
		applicable pricing option from the local site.
	"""

	input_map = {
		'ClientId': 'client_id',
		'ClassId': 'class_id',
		'Test': 'test',
		'RequirePayment': 'require_payment',
		'Waitlist': 'waitlist',
		'SendEmail': 'send_email',
		'WaitlistEntryId': 'waitlist_entry_id',
		'ClientServiceId': 'client_service_id',
		'CrossRegionalBooking': 'cross_regional_booking',
		'CrossRegionalBookingClientServiceSiteId': 'cross_regional_booking_client_service_site_id',
		}

	output_map = {
		'client_id': 'ClientId',
		'class_id': 'ClassId',
		'test': 'Test',
		'require_payment': 'RequirePayment',
		'waitlist': 'Waitlist',
		'send_email': 'SendEmail',
		'waitlist_entry_id': 'WaitlistEntryId',
		'client_service_id': 'ClientServiceId',
		'cross_regional_booking': 'CrossRegionalBooking',
		'cross_regional_booking_client_service_site_id': 'CrossRegionalBookingClientServiceSiteId',
		}

	def __init__(self, client_id, class_id):
		self.client_id = client_id
		self.class_id = class_id
