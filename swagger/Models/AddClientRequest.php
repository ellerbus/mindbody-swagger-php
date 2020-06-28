<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AddClientRequest extends BaseModel
{
	/**
	 * The client’s current [account balance](https://mindbody-online-
	 * support.force.com/support/s/article/203262013-Adding-account-payments-
	 * video-tutorial?language=en_US).
	 * 
	 * @var number format:double
	 */
	public $accountBalance;
	/**
	 * The action taken.
	 * 
	 * @var string 
	 */
	public $action;
	/**
	 * When `true`, indicates that the client is active at the site.<br />
	 * When `false`, indicates that the client is not active at the site.
	 * 
	 * @var boolean 
	 */
	public $active;
	/**
	 * The first line of the client’s street address.
	 * 
	 * @var string 
	 */
	public $addressLine1;
	/**
	 * The second line of the client’s street address, if needed.
	 * 
	 * @var string 
	 */
	public $addressLine2;
	/**
	 * When `true`, indicates that the client prefers services to be provided
	 * by a male service provider.<br />  When `false`, indicates that the
	 * client prefers services to be provided by a female service
	 * provider.<br />  When `null`, indicates that the client has no
	 * preference.  Default: **null**
	 * 
	 * @var boolean 
	 */
	public $apptGenderPrefMale;
	/**
	 * The client’s date of birth.
	 * 
	 * @var string format:date-time
	 */
	public $birthDate;
	/**
	 * The client’s city.
	 * 
	 * @var string 
	 */
	public $city;
	/**
	 * Contains information about the client’s credit card.
	 * 
	 * @var ClientCreditCard 
	 */
	public $clientCreditCard;
	/**
	 * Contains a list of the indexes and client index values to be assigned
	 * to the client.
	 * 
	 * @var AssignedClientIndex[] 
	 */
	public $clientIndexes;
	/**
	 * Contains information about client relationships to be assigned to the
	 * client.
	 * 
	 * @var ClientRelationship[] 
	 */
	public $clientRelationships;
	/**
	 * The country in which the client is located.
	 * 
	 * @var string 
	 */
	public $country;
	/**
	 * The date when the client was added to the business, either by the
	 * client from the online store or by a staff member at the
	 * subscriber’s business. This value always returns in the format yyyy-
	 * mm-ddThh:mm:ss:ms.
	 * 
	 * @var string format:date-time
	 */
	public $creationDate;
	/**
	 * Contains information about the custom fields to be assigned to the
	 * client.
	 * 
	 * @var CustomClientFieldValue[] 
	 */
	public $customClientFields;
	/**
	 * The client’s email address.
	 * 
	 * @var string 
	 */
	public $email;
	/**
	 * The email address of the client’s emergency contact.<br />  For more
	 * information, see [Children’s program features(emergency contact info
	 * rmation)](https://support.mindbodyonline.com/s/article/203259283-Child
	 * ren-s-program-features-emergency-contact-information?language=en_US).
	 * 
	 * @var string 
	 */
	public $emergencyContactInfoEmail;
	/**
	 * The name of the client’s emergency contact.
	 * 
	 * @var string 
	 */
	public $emergencyContactInfoName;
	/**
	 * The phone number of the client’s emergency contact.
	 * 
	 * @var string 
	 */
	public $emergencyContactInfoPhone;
	/**
	 * The client’s relationship with the emergency contact, for example,
	 * mother or spouse.
	 * 
	 * @var string 
	 */
	public $emergencyContactInfoRelationship;
	/**
	 * The date of the client’s first booked appointment at the business.
	 * 
	 * @var string format:date-time
	 */
	public $firstAppointmentDate;
	/**
	 * The client’s first name. You must specify a first name when you add
	 * a client.
	 * 
	 * @var string 
	 */
	public $firstName;
	/**
	 * The client’s gender.
	 * 
	 * @var string 
	 */
	public $gender;
	/**
	 * Sets the client’s home location to the passed location, based on its
	 * ID.
	 * 
	 * @var Location 
	 */
	public $homeLocation;
	/**
	 * The client’s home phone number.
	 * 
	 * @var string 
	 */
	public $homePhone;
	/**
	 * When `true`, indicates that the client should be marked as a company
	 * at the business.<br />  When `false`, indicates the client is an
	 * individual and does not represent a company.
	 * 
	 * @var boolean 
	 */
	public $isCompany;
	/**
	 * This value is set only if the business owner allows individuals to be
	 * prospects.<br />  When `true`, indicates that the client should be
	 * marked as a prospect for the business.<br />  When `false`, indicates
	 * that the client should not be marked as a prospect for the business.
	 * 
	 * @var boolean 
	 */
	public $isProspect;
	/**
	 * The last [formula note](https://support.mindbodyonline.com/s/article/2
	 * 03259903-Appointments-Formula-notes?language=en_US) entered for the
	 * client.
	 * 
	 * @var string 
	 */
	public $lastFormulaNotes;
	/**
	 * The UTC date and time when the client’s information was last
	 * modified.
	 * 
	 * @var string format:date-time
	 */
	public $lastModifiedDateTime;
	/**
	 * The client’s last name. You must specify a last name when you add a
	 * client.
	 * 
	 * @var string 
	 */
	public $lastName;
	/**
	 * Contains the client’s liability agreement information for the
	 * business.
	 * 
	 * @var Liability 
	 */
	public $liability;
	/**
	 * Passing `true` sets the client’s liability information as follows:
	 * * `IsReleased` is set to `true`.  * `AgreementDate` is set to the time
	 * zone of the business when the call was processed.  * `ReleasedBy` is
	 * set to `null` if the call is made by the client, `0` if the call was
	 * made by the business owner, or to a specific staff member’s ID if a
	 * staff member made the call.  Passing `false` sets the client’s
	 * liability information as follows:  * `IsReleased` is set to `false`.
	 * * `AgreementDate` is set to `null`.  * `ReleasedBy` is set to `null`.
	 * 
	 * @var boolean 
	 */
	public $liabilityRelease;
	/**
	 * The ID of the membership icon displayed next to the client’s name,
	 * if the client has a membership on their account.
	 * 
	 * @var integer format:int32
	 */
	public $membershipIcon;
	/**
	 * The client’s middle name.
	 * 
	 * @var string 
	 */
	public $middleName;
	/**
	 * The client’s mobile phone number.
	 * 
	 * @var string 
	 */
	public $mobilePhone;
	/**
	 * The client's mobile provider.
	 * 
	 * @var integer format:int32
	 */
	public $mobileProvider;
	/**
	 * When passed, sets the client's ID to this value. Otherwise, the
	 * client's ID will match their `UniqueId`.
	 * 
	 * @var string 
	 */
	public $newId;
	/**
	 * Any notes entered on the client’s account by staff members. This
	 * value should never be shown to clients unless the business owner has a
	 * specific reason for showing them.
	 * 
	 * @var string 
	 */
	public $notes;
	/**
	 * The URL for the client’s photo, if one has been uploaded.
	 * 
	 * @var string 
	 */
	public $photoUrl;
	/**
	 * The client’s postal code.
	 * 
	 * @var string 
	 */
	public $postalCode;
	/**
	 * Contains information about the client [prospect stage](https://support
	 * .mindbodyonline.com/s/article/206176457-Prospect-
	 * Stages?language=en_US).
	 * 
	 * @var ProspectStage 
	 */
	public $prospectStage;
	/**
	 * Contains any red alert information entered by the business owner for
	 * the client.
	 * 
	 * @var string 
	 */
	public $redAlert;
	/**
	 * Specifies how the client was referred to the business. You can get a
	 * list of possible strings using the `GET ClientReferralTypes`
	 * endpoint.<br />  For more information, see [Referral types and
	 * referral subtypes](https://support.mindbodyonline.com/s/article/203259
	 * 393-Referral-types-and-referral-subtypes?language=en_US).
	 * 
	 * @var string 
	 */
	public $referredBy;
	/**
	 * Contains information about the sales representatives to be assigned to
	 * the new client.
	 * 
	 * @var SalesRep[] 
	 */
	public $salesReps;
	/**
	 * The ID of the site.
	 * 
	 * @var integer format:int32
	 */
	public $siteId;
	/**
	 * The client’s state.
	 * 
	 * @var string 
	 */
	public $state;
	/**
	 * The client’s status.
	 * 
	 * @var string 
	 */
	public $status;
	/**
	 * When `true`, indicates that test mode is enabled. The method is
	 * validated, but no client data is added or updated.<br />  Default:
	 * **false**
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * The client’s system-generated ID at the business. This value cannot
	 * be changed by business owners and is always unique across all clients
	 * at the business. This ID is not widely used in the Public API, but can
	 * be used by your application to uniquely identify clients.
	 * 
	 * @var integer format:int64
	 */
	public $uniqueId;
	/**
	 * The client’s work phone extension number.
	 * 
	 * @var string 
	 */
	public $workExtension;
	/**
	 * The client’s work phone number.
	 * 
	 * @var string 
	 */
	public $workPhone;
	/**
	 * Contains any yellow alert information entered by the business owner
	 * for the client.
	 * 
	 * @var string 
	 */
	public $yellowAlert;
	/**
	 * When `true`, indicates that the client opts to receive schedule
	 * emails.
	 * 
	 * @var boolean 
	 */
	public $sendScheduleEmails;
	/**
	 * When `true`, indicates that the client opts to receive account emails.
	 * 
	 * @var boolean 
	 */
	public $sendAccountEmails;
	/**
	 * When `true`, indicates that the client opts to receive promotional
	 * emails.
	 * 
	 * @var boolean 
	 */
	public $sendPromotionalEmails;
	/**
	 * Constructor
	 */
	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	protected function getInputMap()
	{
		return [
			'AccountBalance' => ['accountBalance', 'number', 'double'],
			'Action' => ['action', 'string', null],
			'Active' => ['active', 'boolean', null],
			'AddressLine1' => ['addressLine1', 'string', null],
			'AddressLine2' => ['addressLine2', 'string', null],
			'ApptGenderPrefMale' => ['apptGenderPrefMale', 'boolean', null],
			'BirthDate' => ['birthDate', 'string', 'date-time'],
			'City' => ['city', 'string', null],
			'ClientCreditCard' => ['clientCreditCard', ClientCreditCard::class, null],
			'ClientIndexes' => ['clientIndexes', 'array', AssignedClientIndex::class],
			'ClientRelationships' => ['clientRelationships', 'array', ClientRelationship::class],
			'Country' => ['country', 'string', null],
			'CreationDate' => ['creationDate', 'string', 'date-time'],
			'CustomClientFields' => ['customClientFields', 'array', CustomClientFieldValue::class],
			'Email' => ['email', 'string', null],
			'EmergencyContactInfoEmail' => ['emergencyContactInfoEmail', 'string', null],
			'EmergencyContactInfoName' => ['emergencyContactInfoName', 'string', null],
			'EmergencyContactInfoPhone' => ['emergencyContactInfoPhone', 'string', null],
			'EmergencyContactInfoRelationship' => ['emergencyContactInfoRelationship', 'string', null],
			'FirstAppointmentDate' => ['firstAppointmentDate', 'string', 'date-time'],
			'FirstName' => ['firstName', 'string', null],
			'Gender' => ['gender', 'string', null],
			'HomeLocation' => ['homeLocation', Location::class, null],
			'HomePhone' => ['homePhone', 'string', null],
			'IsCompany' => ['isCompany', 'boolean', null],
			'IsProspect' => ['isProspect', 'boolean', null],
			'LastFormulaNotes' => ['lastFormulaNotes', 'string', null],
			'LastModifiedDateTime' => ['lastModifiedDateTime', 'string', 'date-time'],
			'LastName' => ['lastName', 'string', null],
			'Liability' => ['liability', Liability::class, null],
			'LiabilityRelease' => ['liabilityRelease', 'boolean', null],
			'MembershipIcon' => ['membershipIcon', 'integer', 'int32'],
			'MiddleName' => ['middleName', 'string', null],
			'MobilePhone' => ['mobilePhone', 'string', null],
			'MobileProvider' => ['mobileProvider', 'integer', 'int32'],
			'NewId' => ['newId', 'string', null],
			'Notes' => ['notes', 'string', null],
			'PhotoUrl' => ['photoUrl', 'string', null],
			'PostalCode' => ['postalCode', 'string', null],
			'ProspectStage' => ['prospectStage', ProspectStage::class, null],
			'RedAlert' => ['redAlert', 'string', null],
			'ReferredBy' => ['referredBy', 'string', null],
			'SalesReps' => ['salesReps', 'array', SalesRep::class],
			'SiteId' => ['siteId', 'integer', 'int32'],
			'State' => ['state', 'string', null],
			'Status' => ['status', 'string', null],
			'Test' => ['test', 'boolean', null],
			'UniqueId' => ['uniqueId', 'integer', 'int64'],
			'WorkExtension' => ['workExtension', 'string', null],
			'WorkPhone' => ['workPhone', 'string', null],
			'YellowAlert' => ['yellowAlert', 'string', null],
			'SendScheduleEmails' => ['sendScheduleEmails', 'boolean', null],
			'SendAccountEmails' => ['sendAccountEmails', 'boolean', null],
			'SendPromotionalEmails' => ['sendPromotionalEmails', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'accountBalance' => ['AccountBalance', 'number', 'double'],
			'action' => ['Action', 'string', null],
			'active' => ['Active', 'boolean', null],
			'addressLine1' => ['AddressLine1', 'string', null],
			'addressLine2' => ['AddressLine2', 'string', null],
			'apptGenderPrefMale' => ['ApptGenderPrefMale', 'boolean', null],
			'birthDate' => ['BirthDate', 'string', 'date-time'],
			'city' => ['City', 'string', null],
			'clientCreditCard' => ['ClientCreditCard', ClientCreditCard::class, null],
			'clientIndexes' => ['ClientIndexes', 'array', AssignedClientIndex::class],
			'clientRelationships' => ['ClientRelationships', 'array', ClientRelationship::class],
			'country' => ['Country', 'string', null],
			'creationDate' => ['CreationDate', 'string', 'date-time'],
			'customClientFields' => ['CustomClientFields', 'array', CustomClientFieldValue::class],
			'email' => ['Email', 'string', null],
			'emergencyContactInfoEmail' => ['EmergencyContactInfoEmail', 'string', null],
			'emergencyContactInfoName' => ['EmergencyContactInfoName', 'string', null],
			'emergencyContactInfoPhone' => ['EmergencyContactInfoPhone', 'string', null],
			'emergencyContactInfoRelationship' => ['EmergencyContactInfoRelationship', 'string', null],
			'firstAppointmentDate' => ['FirstAppointmentDate', 'string', 'date-time'],
			'firstName' => ['FirstName', 'string', null],
			'gender' => ['Gender', 'string', null],
			'homeLocation' => ['HomeLocation', Location::class, null],
			'homePhone' => ['HomePhone', 'string', null],
			'isCompany' => ['IsCompany', 'boolean', null],
			'isProspect' => ['IsProspect', 'boolean', null],
			'lastFormulaNotes' => ['LastFormulaNotes', 'string', null],
			'lastModifiedDateTime' => ['LastModifiedDateTime', 'string', 'date-time'],
			'lastName' => ['LastName', 'string', null],
			'liability' => ['Liability', Liability::class, null],
			'liabilityRelease' => ['LiabilityRelease', 'boolean', null],
			'membershipIcon' => ['MembershipIcon', 'integer', 'int32'],
			'middleName' => ['MiddleName', 'string', null],
			'mobilePhone' => ['MobilePhone', 'string', null],
			'mobileProvider' => ['MobileProvider', 'integer', 'int32'],
			'newId' => ['NewId', 'string', null],
			'notes' => ['Notes', 'string', null],
			'photoUrl' => ['PhotoUrl', 'string', null],
			'postalCode' => ['PostalCode', 'string', null],
			'prospectStage' => ['ProspectStage', ProspectStage::class, null],
			'redAlert' => ['RedAlert', 'string', null],
			'referredBy' => ['ReferredBy', 'string', null],
			'salesReps' => ['SalesReps', 'array', SalesRep::class],
			'siteId' => ['SiteId', 'integer', 'int32'],
			'state' => ['State', 'string', null],
			'status' => ['Status', 'string', null],
			'test' => ['Test', 'boolean', null],
			'uniqueId' => ['UniqueId', 'integer', 'int64'],
			'workExtension' => ['WorkExtension', 'string', null],
			'workPhone' => ['WorkPhone', 'string', null],
			'yellowAlert' => ['YellowAlert', 'string', null],
			'sendScheduleEmails' => ['SendScheduleEmails', 'boolean', null],
			'sendAccountEmails' => ['SendAccountEmails', 'boolean', null],
			'sendPromotionalEmails' => ['SendPromotionalEmails', 'boolean', null],
			];
	}
}
