from .base_model import BaseModel

from .appointment import Appointment
from .unavailability import Unavailability
from .availability import Availability

class Staff(BaseModel):
	"""
	no description available

	Attributes:

		address
		The address of the staff member who is teaching the class.

		appointment_instructor
		When `true`, indicates that the staff member offers appointments.<br
		/>  When `false`, indicates that the staff member does not offer
		appointments.

		always_allow_double_booking
		When `true`, indicates that the staff member can be scheduled for
		overlapping services.<br />  When `false`, indicates that the staff
		can only be scheduled for one service at a time in any given time-
		frame.

		bio
		The staff member’s biography. This string contains HTML.

		city
		The staff member’s city.

		country
		The staff member’s country.

		email
		The staff member’s email address.

		first_name
		The staff member’s first name.

		home_phone
		The staff member’s home phone number.

		id
		The ID assigned to the staff member.

		independent_contractor
		When `true`, indicates that the staff member is an independent
		contractor.  When `false`, indicates that the staff member is not an
		independent contractor.

		is_male
		When `true`, indicates that the staff member is male.  When `false`,
		indicates that the staff member is female.

		last_name
		The staff member’s last name.

		mobile_phone
		The staff member’s mobile phone number.

		name
		The staff member’s name.

		postal_code
		The staff member’s postal code.

		class_teacher
		When `true`, indicates that the staff member can teach classes.  When
		`false`, indicates that the staff member cannot teach classes.

		sort_order
		If configured by the business owner, this field determines a staff
		member’s weight when sorting. Use this field to sort staff members
		on your interface.

		state
		The staff member’s state.

		work_phone
		The staff member’s work phone number.

		image_url
		The URL of the staff member’s image, if one has been uploaded.

		appointments
		A list of appointments for the staff.

		unavailabilities
		A list of unavailabilities for the staff.

		availabilities
		A list of availabilities for the staff.
	"""

	input_map = {
		'Address': 'address',
		'AppointmentInstructor': 'appointment_instructor',
		'AlwaysAllowDoubleBooking': 'always_allow_double_booking',
		'Bio': 'bio',
		'City': 'city',
		'Country': 'country',
		'Email': 'email',
		'FirstName': 'first_name',
		'HomePhone': 'home_phone',
		'Id': 'id',
		'IndependentContractor': 'independent_contractor',
		'IsMale': 'is_male',
		'LastName': 'last_name',
		'MobilePhone': 'mobile_phone',
		'Name': 'name',
		'PostalCode': 'postal_code',
		'ClassTeacher': 'class_teacher',
		'SortOrder': 'sort_order',
		'State': 'state',
		'WorkPhone': 'work_phone',
		'ImageUrl': 'image_url',
		'Appointments': ['appointments', Appointment],
		'Unavailabilities': ['unavailabilities', Unavailability],
		'Availabilities': ['availabilities', Availability],
		}

	output_map = {
		'address': 'Address',
		'appointment_instructor': 'AppointmentInstructor',
		'always_allow_double_booking': 'AlwaysAllowDoubleBooking',
		'bio': 'Bio',
		'city': 'City',
		'country': 'Country',
		'email': 'Email',
		'first_name': 'FirstName',
		'home_phone': 'HomePhone',
		'id': 'Id',
		'independent_contractor': 'IndependentContractor',
		'is_male': 'IsMale',
		'last_name': 'LastName',
		'mobile_phone': 'MobilePhone',
		'name': 'Name',
		'postal_code': 'PostalCode',
		'class_teacher': 'ClassTeacher',
		'sort_order': 'SortOrder',
		'state': 'State',
		'work_phone': 'WorkPhone',
		'image_url': 'ImageUrl',
		'appointments': 'Appointments',
		'unavailabilities': 'Unavailabilities',
		'availabilities': 'Availabilities',
		}

	address = None
	appointment_instructor = None
	always_allow_double_booking = None
	bio = None
	city = None
	country = None
	email = None
	first_name = None
	home_phone = None
	id = None
	independent_contractor = None
	is_male = None
	last_name = None
	mobile_phone = None
	name = None
	postal_code = None
	class_teacher = None
	sort_order = None
	state = None
	work_phone = None
	image_url = None
	appointments = None
	unavailabilities = None
	availabilities = None

