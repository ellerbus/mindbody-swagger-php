from .base_model import BaseModel

from .client_credit_card import ClientCreditCard
from .liability import Liability
from .prospect_stage import ProspectStage

class Client(BaseModel):
	"""
	A Client

	Attributes:

		appointment_gender_preference
		The gender of staff member with whom the client prefers to book
		appointments.

		birth_date
		The client’s date of birth.

		country
		The client’s country.

		creation_date
		The date the client’s profile was created and added to the business,
		either by the client from the online store, or by a staff member. This
		value always returns in the format `yyyy-mm-ddThh:mm:ss:ms`.

		custom_client_fields
		Contains information about the custom client fields assigned to the
		client.

		client_credit_card
		Contains information about the client’s credit card.

		client_indexes
		Contains the IDs of the client’s assigned ClientIndexes and
		ClientIndexValues.

		client_relationships
		Contains information about the relationship between two clients.

		first_appointment_date
		The date of the client’s first booked appointment at the business.

		first_name
		The client’s first name.

		id
		The client’s ID, as configured by the business owner. This is the
		client’s barcode ID if the business owner assigns barcodes to
		clients. This ID is used throughout the Public API for client-related
		Public API calls. When used in a POST `UpdateClient` request, the `Id`
		is used to identify the client for the update.

		is_company
		When `true`, indicates that the client should be marked as a company
		at the business.<br />  When `false`, indicates the client is an
		individual and does not represent a company.

		is_prospect
		This value is set only if the business owner allows individuals to be
		prospects.<br />  When `true`, indicates that the client should be
		marked as a prospect for the business.<br />  When `false`, indicates
		that the client should not be marked as a prospect for the business.

		last_name
		The client’s last name.

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
		The ID of the [membership icon](https://support.mindbodyonline.com/s/a
		rticle/203259703-Membership-Setup-screen?language=en_US) displayed
		next to the client’s name, if the client has a membership on their
		account.

		mobile_provider
		The client’s mobile provider.

		notes
		Any notes entered on the client’s account by staff members. This
		value should never be shown to clients unless the business owner has a
		specific reason for showing them.

		state
		The client’s state.

		unique_id
		The client’s system-generated ID at the business. This value cannot
		be changed by business owners and is always unique across all clients
		at the business. This ID is not widely used in the Public API, but can
		be used by your application to uniquely identify clients.

		last_modified_date_time
		The UTC date and time when the client’s information was last
		modified.

		red_alert
		Contains any red alert information entered by the business owner for
		the client.

		yellow_alert
		Contains any yellow alert information entered by the business owner
		for the client.

		middle_name
		The client’s middle name.

		prospect_stage
		Contains information about the client [prospect stage](https://support
		.mindbodyonline.com/s/article/206176457-Prospect-
		Stages?language=en_US).

		email
		The client’s email address.

		mobile_phone
		The client’s mobile phone number.

		home_phone
		The client’s home phone number.

		work_phone
		The client’s work phone number.

		account_balance
		The client’s current [account balance](https://mindbody-online-
		support.force.com/support/s/article/203262013-Adding-account-payments-
		video-tutorial?language=en_US).

		address_line_1
		The first line of the client’s street address.

		address_line_2
		The second line of the client’s street address, if needed.

		city
		The client’s city.

		postal_code
		The client’s postal code.

		work_extension
		The client’s work phone extension number.

		referred_by
		Specifies how the client was referred to the business. You can get a
		list of possible strings using the `GetClientReferralTypes` endpoint.

		photo_url
		The URL of the client’s photo for the client profile.

		emergency_contact_info_name
		The name of the client’s emergency contact.

		emergency_contact_info_email
		The email address of the client’s emergency contact.

		emergency_contact_info_phone
		The phone number of the client’s emergency contact.

		emergency_contact_info_relationship
		The client’s relationship with the emergency contact.

		gender
		The gender of the client.

		last_formula_notes
		The last [formula note](https://support.mindbodyonline.com/s/article/2
		03259903-Appointments-Formula-notes?language=en_US) entered for the
		client.

		active
		When `true`, indicates that the client’s profile is marked as active
		on the site.<br />  When `false`, the client’s profile is inactive.

		sales_reps
		A list of sales representatives.

		status
		The status of the client in the business. Possible values are:  *
		Declined  * Non-Member  * Active  * Expired  * Suspended  * Terminated

		action
		The action taken.

		send_account_emails
		When `true`, indicates that the client has opted to receive general
		account notifications by email. This property is editable.   <br
		/>Default: **false**

		send_account_texts
		When `true`, indicates that the client has opted to receive general
		account notifications by text message. This parameter cannot be
		updated by developers. If included in a request, it is ignored.

		send_promotional_emails
		When `true`, indicates that the client has opted to receive
		promotional notifications by email. This property is editable.   <br
		/>Default: **false**

		send_promotional_texts
		When `true`, indicates that the client has opted to receive
		promotional notifications by text message. This parameter cannot be
		updated by developers. If included in a request, it is ignored.

		send_schedule_emails
		When `true`, indicates that the client has opted to receive schedule
		notifications by email. This property is editable.   <br />Default:
		**false**

		send_schedule_texts
		When `true`, indicates that the client has opted to receive schedule
		notifications by text message. This parameter cannot be updated by
		developers. If included in a request, it is ignored.
	"""

	input_map = {
		'AppointmentGenderPreference': 'appointment_gender_preference',
		'BirthDate': 'birth_date',
		'Country': 'country',
		'CreationDate': 'creation_date',
		'CustomClientFields': 'custom_client_fields',
		'ClientCreditCard': ('client_credit_card', ClientCreditCard)
		'ClientIndexes': 'client_indexes',
		'ClientRelationships': 'client_relationships',
		'FirstAppointmentDate': 'first_appointment_date',
		'FirstName': 'first_name',
		'Id': 'id',
		'IsCompany': 'is_company',
		'IsProspect': 'is_prospect',
		'LastName': 'last_name',
		'Liability': ('liability', Liability)
		'LiabilityRelease': 'liability_release',
		'MembershipIcon': 'membership_icon',
		'MobileProvider': 'mobile_provider',
		'Notes': 'notes',
		'State': 'state',
		'UniqueId': 'unique_id',
		'LastModifiedDateTime': 'last_modified_date_time',
		'RedAlert': 'red_alert',
		'YellowAlert': 'yellow_alert',
		'MiddleName': 'middle_name',
		'ProspectStage': ('prospect_stage', ProspectStage)
		'Email': 'email',
		'MobilePhone': 'mobile_phone',
		'HomePhone': 'home_phone',
		'WorkPhone': 'work_phone',
		'AccountBalance': 'account_balance',
		'AddressLine1': 'address_line_1',
		'AddressLine2': 'address_line_2',
		'City': 'city',
		'PostalCode': 'postal_code',
		'WorkExtension': 'work_extension',
		'ReferredBy': 'referred_by',
		'PhotoUrl': 'photo_url',
		'EmergencyContactInfoName': 'emergency_contact_info_name',
		'EmergencyContactInfoEmail': 'emergency_contact_info_email',
		'EmergencyContactInfoPhone': 'emergency_contact_info_phone',
		'EmergencyContactInfoRelationship': 'emergency_contact_info_relationship',
		'Gender': 'gender',
		'LastFormulaNotes': 'last_formula_notes',
		'Active': 'active',
		'SalesReps': 'sales_reps',
		'Status': 'status',
		'Action': 'action',
		'SendAccountEmails': 'send_account_emails',
		'SendAccountTexts': 'send_account_texts',
		'SendPromotionalEmails': 'send_promotional_emails',
		'SendPromotionalTexts': 'send_promotional_texts',
		'SendScheduleEmails': 'send_schedule_emails',
		'SendScheduleTexts': 'send_schedule_texts',
		}

	output_map = {
		'appointment_gender_preference': 'AppointmentGenderPreference',
		'birth_date': 'BirthDate',
		'country': 'Country',
		'creation_date': 'CreationDate',
		'custom_client_fields': 'CustomClientFields',
		'client_credit_card': 'ClientCreditCard',
		'client_indexes': 'ClientIndexes',
		'client_relationships': 'ClientRelationships',
		'first_appointment_date': 'FirstAppointmentDate',
		'first_name': 'FirstName',
		'id': 'Id',
		'is_company': 'IsCompany',
		'is_prospect': 'IsProspect',
		'last_name': 'LastName',
		'liability': 'Liability',
		'liability_release': 'LiabilityRelease',
		'membership_icon': 'MembershipIcon',
		'mobile_provider': 'MobileProvider',
		'notes': 'Notes',
		'state': 'State',
		'unique_id': 'UniqueId',
		'last_modified_date_time': 'LastModifiedDateTime',
		'red_alert': 'RedAlert',
		'yellow_alert': 'YellowAlert',
		'middle_name': 'MiddleName',
		'prospect_stage': 'ProspectStage',
		'email': 'Email',
		'mobile_phone': 'MobilePhone',
		'home_phone': 'HomePhone',
		'work_phone': 'WorkPhone',
		'account_balance': 'AccountBalance',
		'address_line_1': 'AddressLine1',
		'address_line_2': 'AddressLine2',
		'city': 'City',
		'postal_code': 'PostalCode',
		'work_extension': 'WorkExtension',
		'referred_by': 'ReferredBy',
		'photo_url': 'PhotoUrl',
		'emergency_contact_info_name': 'EmergencyContactInfoName',
		'emergency_contact_info_email': 'EmergencyContactInfoEmail',
		'emergency_contact_info_phone': 'EmergencyContactInfoPhone',
		'emergency_contact_info_relationship': 'EmergencyContactInfoRelationship',
		'gender': 'Gender',
		'last_formula_notes': 'LastFormulaNotes',
		'active': 'Active',
		'sales_reps': 'SalesReps',
		'status': 'Status',
		'action': 'Action',
		'send_account_emails': 'SendAccountEmails',
		'send_account_texts': 'SendAccountTexts',
		'send_promotional_emails': 'SendPromotionalEmails',
		'send_promotional_texts': 'SendPromotionalTexts',
		'send_schedule_emails': 'SendScheduleEmails',
		'send_schedule_texts': 'SendScheduleTexts',
		}