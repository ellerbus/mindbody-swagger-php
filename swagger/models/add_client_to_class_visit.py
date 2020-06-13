from .base_model import BaseModel


class AddClientToClassVisit(BaseModel):
	"""
	no description available

	Attributes:

		appointment_id
		The appointment’s ID.

		appointment_gender_preference
		The gender of staff member with whom the client prefers to book
		appointments.

		appointment_status
		The status of the appointment.

		class_id
		The class ID that was used to retrieve the visits.

		client_id
		The ID of the client associated with the visit.

		start_date_time
		The time this class is scheduled to start.

		end_date_time
		The date and time the visit ends. The Public API returns UTC dates and
		times. For example, a class that occurs on June 25th, 2018 at 2:15PM
		(EST) appears as 2018-06-25T19:15:00Z because EST is five hours behind
		UTC. Date time pairs always return in the format YYYY-MM-DDTHH:mm:ssZ.

		id
		The ID of the visit.

		last_modified_date_time
		When included in the request, only records modified on or after the
		specified `LastModifiedDate` are included in the response. The Public
		API returns UTC dates and times. For example, a class that occurs on
		June 25th, 2018 at 2:15PM (EST) appears as 2018-06-25T19:15:00Z
		because EST is five hours behind UTC. Date time pairs always return in
		the format YYYY-MM-DDTHH:mm:ssZ.

		late_cancelled
		When `true`, indicates that the class has been `LateCancelled`.<br />
		When `false`, indicates that the class has not been `LateCancelled`.

		location_id
		The ID of the location where the visit took place or is to take place.

		make_up
		When `true`, the client can make up this session and a session is not
		deducted from the pricing option that was used to sign the client into
		the enrollment. When the client has the make-up session, a session is
		automatically removed from a pricing option that matches the service
		category of the enrollment and is within the same date range of the
		missed session.<br />  When `false`, the client cannot make up this
		session. See [Enrollments: Make-ups](https://support.mindbodyonline.co
		m/s/article/203259433-Enrollments-Make-ups?language=en_US) for more
		information.

		name
		The name of the class.

		service_id
		The ID of the client's pricing option applied to the class visit.

		service_name
		The name of the pricing option applied to the class visit.

		product_id
		The business' ID of the type of pricing option used to pay for the
		class visit.

		signed_in
		When `true`, indicates that the client has been signed in.<br />  When
		`false`, indicates that the client has not been signed in.

		staff_id
		The ID of the staff member who is teaching the class.

		web_signup
		When `true`, indicates that the client signed up online.<br />  When
		`false`, indicates that the client was signed up by a staff member.

		action
		The action taken.

		cross_regional_booking_performed
		When `true`, indicates that the client is paying for the visit using a
		pricing option from one of their associated cross-regional profiles.

		site_id
		The ID of the business from which cross-regional payment is applied.

		waitlist_entry_id
		When this value is not null, it indicates that the client is on the
		waiting list for the requested class. The only additional fields that
		are populated when this is not null are:  * ClassId  * ClientId    You
		can call GET WaitlistEntries using `WaitlistEntryId` to obtain more
		data about this waiting list entry.
	"""

	input_map = {
		'AppointmentId': 'appointment_id',
		'AppointmentGenderPreference': 'appointment_gender_preference',
		'AppointmentStatus': 'appointment_status',
		'ClassId': 'class_id',
		'ClientId': 'client_id',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'Id': 'id',
		'LastModifiedDateTime': 'last_modified_date_time',
		'LateCancelled': 'late_cancelled',
		'LocationId': 'location_id',
		'MakeUp': 'make_up',
		'Name': 'name',
		'ServiceId': 'service_id',
		'ServiceName': 'service_name',
		'ProductId': 'product_id',
		'SignedIn': 'signed_in',
		'StaffId': 'staff_id',
		'WebSignup': 'web_signup',
		'Action': 'action',
		'CrossRegionalBookingPerformed': 'cross_regional_booking_performed',
		'SiteId': 'site_id',
		'WaitlistEntryId': 'waitlist_entry_id',
		}

	output_map = {
		'appointment_id': 'AppointmentId',
		'appointment_gender_preference': 'AppointmentGenderPreference',
		'appointment_status': 'AppointmentStatus',
		'class_id': 'ClassId',
		'client_id': 'ClientId',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'id': 'Id',
		'last_modified_date_time': 'LastModifiedDateTime',
		'late_cancelled': 'LateCancelled',
		'location_id': 'LocationId',
		'make_up': 'MakeUp',
		'name': 'Name',
		'service_id': 'ServiceId',
		'service_name': 'ServiceName',
		'product_id': 'ProductId',
		'signed_in': 'SignedIn',
		'staff_id': 'StaffId',
		'web_signup': 'WebSignup',
		'action': 'Action',
		'cross_regional_booking_performed': 'CrossRegionalBookingPerformed',
		'site_id': 'SiteId',
		'waitlist_entry_id': 'WaitlistEntryId',
		}

	appointment_id = None
	appointment_gender_preference = None
	appointment_status = None
	class_id = None
	client_id = None
	start_date_time = None
	end_date_time = None
	id = None
	last_modified_date_time = None
	late_cancelled = None
	location_id = None
	make_up = None
	name = None
	service_id = None
	service_name = None
	product_id = None
	signed_in = None
	staff_id = None
	web_signup = None
	action = None
	cross_regional_booking_performed = None
	site_id = None
	waitlist_entry_id = None

