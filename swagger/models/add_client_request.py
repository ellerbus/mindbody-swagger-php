from .base_model import BaseModel

from .client_credit_card import ClientCreditCard
from .location import Location
from .liability import Liability
from .prospect_stage import ProspectStage

class AddClientRequest(BaseModel):
	"""
	no description available

	Attributes:

		account_balance
		The client’s current [account balance](https://mindbody-online-
		support.force.com/support/s/article/203262013-Adding-account-payments-
		video-tutorial?language=en_US).

		action
		The action taken.

		active
		When `true`, indicates that the client is active at the site.<br />
		When `false`, indicates that the client is not active at the site.

		address_line_1
		The first line of the client’s street address.

		address_line_2
		The second line of the client’s street address, if needed.

		appt_gender_pref_male
		When `true`, indicates that the client prefers services to be provided
		by a male service provider.<br />  When `false`, indicates that the
		client prefers services to be provided by a female service
		provider.<br />  When `null`, indicates that the client has no
		preference.  Default: **null**

		birth_date
		The client’s date of birth.

		city
		The client’s city.

		client_credit_card
		Contains information about the client’s credit card.

		client_indexes
		Contains a list of the indexes and client index values to be assigned
		to the client.

		client_relationships
		Contains information about client relationships to be assigned to the
		client.

		country
		The country in which the client is located.

		creation_date
		The date when the client was added to the business, either by the
		client from the online store or by a staff member at the
		subscriber’s business. This value always returns in the format yyyy-
		mm-ddThh:mm:ss:ms.

		custom_client_fields
		Contains information about the custom fields to be assigned to the
		client.

		email
		The client’s email address.

		emergency_contact_info_email
		The email address of the client’s emergency contact.<br />  For more
		information, see [Children’s program features(emergency contact info
		rmation)](https://support.mindbodyonline.com/s/article/203259283-Child
		ren-s-program-features-emergency-contact-information?language=en_US).

		emergency_contact_info_name
		The name of the client’s emergency contact.

		emergency_contact_info_phone
		The phone number of the client’s emergency contact.

		emergency_contact_info_relationship
		The client’s relationship with the emergency contact, for example,
		mother or spouse.

		first_appointment_date
		The date of the client’s first booked appointment at the business.

		first_name
		The client’s first name. You must specify a first name when you add
		a client.

		gender
		The client’s gender.

		home_location
		Sets the client’s home location to the passed location, based on its
		ID.

		home_phone
		The client’s home phone number.

		is_company
		When `true`, indicates that the client should be marked as a company
		at the business.<br />  When `false`, indicates the client is an
		individual and does not represent a company.

		is_prospect
		This value is set only if the business owner allows individuals to be
		prospects.<br />  When `true`, indicates that the client should be
		marked as a prospect for the business.<br />  When `false`, indicates
		that the client should not be marked as a prospect for the business.

		last_formula_notes
		The last [formula note](https://support.mindbodyonline.com/s/article/2
		03259903-Appointments-Formula-notes?language=en_US) entered for the
		client.

		last_modified_date_time
		The UTC date and time when the client’s information was last
		modified.

		last_name
		The client’s last name. You must specify a last name when you add a
		client.

		liability
		Contains the client’s liability agreement information for the
		business.

		liability_release
		Passing `true` sets the client’s liability information as follows:
		* `IsReleased` is set to `true`.  * `AgreementDate` is set to the time
		zone of the business when the call was processed.  * `ReleasedBy` is
		set to `null` if the call is made by the client, `0` if the call was
		made by the business owner, or to a specific staff member’s ID if a
		staff member made the call.  Passing `false` sets the client’s
		liability information as follows:  * `IsReleased` is set to `false`.
		* `AgreementDate` is set to `null`.  * `ReleasedBy` is set to `null`.

		membership_icon
		The ID of the membership icon displayed next to the client’s name,
		if the client has a membership on their account.

		middle_name
		The client’s middle name.

		mobile_phone
		The client’s mobile phone number.

		mobile_provider
		The client's mobile provider.

		new_id
		When passed, sets the client's ID to this value. Otherwise, the
		client's ID will match their `UniqueId`.

		notes
		Any notes entered on the client’s account by staff members. This
		value should never be shown to clients unless the business owner has a
		specific reason for showing them.

		photo_url
		The URL for the client’s photo, if one has been uploaded.

		postal_code
		The client’s postal code.

		prospect_stage
		Contains information about the client [prospect stage](https://support
		.mindbodyonline.com/s/article/206176457-Prospect-
		Stages?language=en_US).

		red_alert
		Contains any red alert information entered by the business owner for
		the client.

		referred_by
		Specifies how the client was referred to the business. You can get a
		list of possible strings using the `GET ClientReferralTypes`
		endpoint.<br />  For more information, see [Referral types and
		referral subtypes](https://support.mindbodyonline.com/s/article/203259
		393-Referral-types-and-referral-subtypes?language=en_US).

		sales_reps
		Contains information about the sales representatives to be assigned to
		the new client.

		site_id
		The ID of the site.

		state
		The client’s state.

		status
		The client’s status.

		test
		When `true`, indicates that test mode is enabled. The method is
		validated, but no client data is added or updated.<br />  Default:
		**false**

		unique_id
		The client’s system-generated ID at the business. This value cannot
		be changed by business owners and is always unique across all clients
		at the business. This ID is not widely used in the Public API, but can
		be used by your application to uniquely identify clients.

		work_extension
		The client’s work phone extension number.

		work_phone
		The client’s work phone number.

		yellow_alert
		Contains any yellow alert information entered by the business owner
		for the client.

		send_schedule_emails
		When `true`, indicates that the client opts to receive schedule
		emails.

		send_account_emails
		When `true`, indicates that the client opts to receive account emails.

		send_promotional_emails
		When `true`, indicates that the client opts to receive promotional
		emails.
	"""

	input_map = {
		'AccountBalance': 'account_balance',
		'Action': 'action',
		'Active': 'active',
		'AddressLine1': 'address_line_1',
		'AddressLine2': 'address_line_2',
		'ApptGenderPrefMale': 'appt_gender_pref_male',
		'BirthDate': 'birth_date',
		'City': 'city',
		'ClientCreditCard': ('client_credit_card', ClientCreditCard),
		'ClientIndexes': 'client_indexes',
		'ClientRelationships': 'client_relationships',
		'Country': 'country',
		'CreationDate': 'creation_date',
		'CustomClientFields': 'custom_client_fields',
		'Email': 'email',
		'EmergencyContactInfoEmail': 'emergency_contact_info_email',
		'EmergencyContactInfoName': 'emergency_contact_info_name',
		'EmergencyContactInfoPhone': 'emergency_contact_info_phone',
		'EmergencyContactInfoRelationship': 'emergency_contact_info_relationship',
		'FirstAppointmentDate': 'first_appointment_date',
		'FirstName': 'first_name',
		'Gender': 'gender',
		'HomeLocation': ('home_location', HomeLocation),
		'HomePhone': 'home_phone',
		'IsCompany': 'is_company',
		'IsProspect': 'is_prospect',
		'LastFormulaNotes': 'last_formula_notes',
		'LastModifiedDateTime': 'last_modified_date_time',
		'LastName': 'last_name',
		'Liability': ('liability', Liability),
		'LiabilityRelease': 'liability_release',
		'MembershipIcon': 'membership_icon',
		'MiddleName': 'middle_name',
		'MobilePhone': 'mobile_phone',
		'MobileProvider': 'mobile_provider',
		'NewId': 'new_id',
		'Notes': 'notes',
		'PhotoUrl': 'photo_url',
		'PostalCode': 'postal_code',
		'ProspectStage': ('prospect_stage', ProspectStage),
		'RedAlert': 'red_alert',
		'ReferredBy': 'referred_by',
		'SalesReps': 'sales_reps',
		'SiteId': 'site_id',
		'State': 'state',
		'Status': 'status',
		'Test': 'test',
		'UniqueId': 'unique_id',
		'WorkExtension': 'work_extension',
		'WorkPhone': 'work_phone',
		'YellowAlert': 'yellow_alert',
		'SendScheduleEmails': 'send_schedule_emails',
		'SendAccountEmails': 'send_account_emails',
		'SendPromotionalEmails': 'send_promotional_emails',
		}

	output_map = {
		'account_balance': 'AccountBalance',
		'action': 'Action',
		'active': 'Active',
		'address_line_1': 'AddressLine1',
		'address_line_2': 'AddressLine2',
		'appt_gender_pref_male': 'ApptGenderPrefMale',
		'birth_date': 'BirthDate',
		'city': 'City',
		'client_credit_card': 'ClientCreditCard',
		'client_indexes': 'ClientIndexes',
		'client_relationships': 'ClientRelationships',
		'country': 'Country',
		'creation_date': 'CreationDate',
		'custom_client_fields': 'CustomClientFields',
		'email': 'Email',
		'emergency_contact_info_email': 'EmergencyContactInfoEmail',
		'emergency_contact_info_name': 'EmergencyContactInfoName',
		'emergency_contact_info_phone': 'EmergencyContactInfoPhone',
		'emergency_contact_info_relationship': 'EmergencyContactInfoRelationship',
		'first_appointment_date': 'FirstAppointmentDate',
		'first_name': 'FirstName',
		'gender': 'Gender',
		'home_location': 'HomeLocation',
		'home_phone': 'HomePhone',
		'is_company': 'IsCompany',
		'is_prospect': 'IsProspect',
		'last_formula_notes': 'LastFormulaNotes',
		'last_modified_date_time': 'LastModifiedDateTime',
		'last_name': 'LastName',
		'liability': 'Liability',
		'liability_release': 'LiabilityRelease',
		'membership_icon': 'MembershipIcon',
		'middle_name': 'MiddleName',
		'mobile_phone': 'MobilePhone',
		'mobile_provider': 'MobileProvider',
		'new_id': 'NewId',
		'notes': 'Notes',
		'photo_url': 'PhotoUrl',
		'postal_code': 'PostalCode',
		'prospect_stage': 'ProspectStage',
		'red_alert': 'RedAlert',
		'referred_by': 'ReferredBy',
		'sales_reps': 'SalesReps',
		'site_id': 'SiteId',
		'state': 'State',
		'status': 'Status',
		'test': 'Test',
		'unique_id': 'UniqueId',
		'work_extension': 'WorkExtension',
		'work_phone': 'WorkPhone',
		'yellow_alert': 'YellowAlert',
		'send_schedule_emails': 'SendScheduleEmails',
		'send_account_emails': 'SendAccountEmails',
		'send_promotional_emails': 'SendPromotionalEmails',
		}

	account_balance = None
	action = None
	active = None
	address_line_1 = None
	address_line_2 = None
	appt_gender_pref_male = None
	birth_date = None
	city = None
		'ClientCreditCard': ('client_credit_card', ClientCreditCard),
	client_indexes = None
	client_relationships = None
	country = None
	creation_date = None
	custom_client_fields = None
	email = None
	emergency_contact_info_email = None
	emergency_contact_info_name = None
	emergency_contact_info_phone = None
	emergency_contact_info_relationship = None
	first_appointment_date = None
	first_name = None
	gender = None
		'HomeLocation': ('home_location', HomeLocation),
	home_phone = None
	is_company = None
	is_prospect = None
	last_formula_notes = None
	last_modified_date_time = None
	last_name = None
		'Liability': ('liability', Liability),
	liability_release = None
	membership_icon = None
	middle_name = None
	mobile_phone = None
	mobile_provider = None
	new_id = None
	notes = None
	photo_url = None
	postal_code = None
		'ProspectStage': ('prospect_stage', ProspectStage),
	red_alert = None
	referred_by = None
	sales_reps = None
	site_id = None
	state = None
	status = None
	test = None
	unique_id = None
	work_extension = None
	work_phone = None
	yellow_alert = None
	send_schedule_emails = None
	send_account_emails = None
	send_promotional_emails = None



	def __init__(self, first_name, last_name):
		self.first_name = first_name
		self.last_name = last_name
