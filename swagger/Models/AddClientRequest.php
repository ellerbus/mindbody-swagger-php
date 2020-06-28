<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class AddClientRequest extends BaseModel
{
	/*
	 * The client’s current [account balance](https://mindbody-online-
	 * support.force.com/support/s/article/203262013-Adding-account-payments-
	 * video-tutorial?language=en_US).
	 * 
	 * @var number
	 */
	public $accountBalance;
	/*
	 * The action taken.
	 * 
	 * @var string
	 */
	public $action;
	/*
	 * When `true`, indicates that the client is active at the site.<br />
	 * When `false`, indicates that the client is not active at the site.
	 * 
	 * @var boolean
	 */
	public $active;
	/*
	 * The first line of the client’s street address.
	 * 
	 * @var string
	 */
	public $addressLine1;
	/*
	 * The second line of the client’s street address, if needed.
	 * 
	 * @var string
	 */
	public $addressLine2;
	/*
	 * When `true`, indicates that the client prefers services to be provided
	 * by a male service provider.<br />  When `false`, indicates that the
	 * client prefers services to be provided by a female service
	 * provider.<br />  When `null`, indicates that the client has no
	 * preference.  Default: **null**
	 * 
	 * @var boolean
	 */
	public $apptGenderPrefMale;
	/*
	 * The client’s date of birth.
	 * 
	 * @var string
	 */
	public $birthDate;
	/*
	 * The client’s city.
	 * 
	 * @var string
	 */
	public $city;
	/*
	 * Contains information about the client’s credit card.
	 * 
	 * @var ClientCreditCard
	 */
	public $clientCreditCard;
	/*
	 * Contains a list of the indexes and client index values to be assigned
	 * to the client.
	 * 
	 * @var AssignedClientIndex[]
	 */
	public $clientIndexes;
	/*
	 * Contains information about client relationships to be assigned to the
	 * client.
	 * 
	 * @var ClientRelationship[]
	 */
	public $clientRelationships;
	/*
	 * The country in which the client is located.
	 * 
	 * @var string
	 */
	public $country;
	/*
	 * The date when the client was added to the business, either by the
	 * client from the online store or by a staff member at the
	 * subscriber’s business. This value always returns in the format yyyy-
	 * mm-ddThh:mm:ss:ms.
	 * 
	 * @var string
	 */
	public $creationDate;
	/*
	 * Contains information about the custom fields to be assigned to the
	 * client.
	 * 
	 * @var CustomClientFieldValue[]
	 */
	public $customClientFields;
	/*
	 * The client’s email address.
	 * 
	 * @var string
	 */
	public $email;
	/*
	 * The email address of the client’s emergency contact.<br />  For more
	 * information, see [Children’s program features(emergency contact info
	 * rmation)](https://support.mindbodyonline.com/s/article/203259283-Child
	 * ren-s-program-features-emergency-contact-information?language=en_US).
	 * 
	 * @var string
	 */
	public $emergencyContactInfoEmail;
	/*
	 * The name of the client’s emergency contact.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoName;
	/*
	 * The phone number of the client’s emergency contact.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoPhone;
	/*
	 * The client’s relationship with the emergency contact, for example,
	 * mother or spouse.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoRelationship;
	/*
	 * The date of the client’s first booked appointment at the business.
	 * 
	 * @var string
	 */
	public $firstAppointmentDate;
	/*
	 * The client’s first name. You must specify a first name when you add
	 * a client.
	 * 
	 * @var string
	 */
	public $firstName;
	/*
	 * The client’s gender.
	 * 
	 * @var string
	 */
	public $gender;
	/*
	 * Sets the client’s home location to the passed location, based on its
	 * ID.
	 * 
	 * @var Location
	 */
	public $homeLocation;
	/*
	 * The client’s home phone number.
	 * 
	 * @var string
	 */
	public $homePhone;
	/*
	 * When `true`, indicates that the client should be marked as a company
	 * at the business.<br />  When `false`, indicates the client is an
	 * individual and does not represent a company.
	 * 
	 * @var boolean
	 */
	public $isCompany;
	/*
	 * This value is set only if the business owner allows individuals to be
	 * prospects.<br />  When `true`, indicates that the client should be
	 * marked as a prospect for the business.<br />  When `false`, indicates
	 * that the client should not be marked as a prospect for the business.
	 * 
	 * @var boolean
	 */
	public $isProspect;
	/*
	 * The last [formula note](https://support.mindbodyonline.com/s/article/2
	 * 03259903-Appointments-Formula-notes?language=en_US) entered for the
	 * client.
	 * 
	 * @var string
	 */
	public $lastFormulaNotes;
	/*
	 * The UTC date and time when the client’s information was last
	 * modified.
	 * 
	 * @var string
	 */
	public $lastModifiedDateTime;
	/*
	 * The client’s last name. You must specify a last name when you add a
	 * client.
	 * 
	 * @var string
	 */
	public $lastName;
	/*
	 * Contains the client’s liability agreement information for the
	 * business.
	 * 
	 * @var Liability
	 */
	public $liability;
	/*
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
	/*
	 * The ID of the membership icon displayed next to the client’s name,
	 * if the client has a membership on their account.
	 * 
	 * @var integer
	 */
	public $membershipIcon;
	/*
	 * The client’s middle name.
	 * 
	 * @var string
	 */
	public $middleName;
	/*
	 * The client’s mobile phone number.
	 * 
	 * @var string
	 */
	public $mobilePhone;
	/*
	 * The client's mobile provider.
	 * 
	 * @var integer
	 */
	public $mobileProvider;
	/*
	 * When passed, sets the client's ID to this value. Otherwise, the
	 * client's ID will match their `UniqueId`.
	 * 
	 * @var string
	 */
	public $newId;
	/*
	 * Any notes entered on the client’s account by staff members. This
	 * value should never be shown to clients unless the business owner has a
	 * specific reason for showing them.
	 * 
	 * @var string
	 */
	public $notes;
	/*
	 * The URL for the client’s photo, if one has been uploaded.
	 * 
	 * @var string
	 */
	public $photoUrl;
	/*
	 * The client’s postal code.
	 * 
	 * @var string
	 */
	public $postalCode;
	/*
	 * Contains information about the client [prospect stage](https://support
	 * .mindbodyonline.com/s/article/206176457-Prospect-
	 * Stages?language=en_US).
	 * 
	 * @var ProspectStage
	 */
	public $prospectStage;
	/*
	 * Contains any red alert information entered by the business owner for
	 * the client.
	 * 
	 * @var string
	 */
	public $redAlert;
	/*
	 * Specifies how the client was referred to the business. You can get a
	 * list of possible strings using the `GET ClientReferralTypes`
	 * endpoint.<br />  For more information, see [Referral types and
	 * referral subtypes](https://support.mindbodyonline.com/s/article/203259
	 * 393-Referral-types-and-referral-subtypes?language=en_US).
	 * 
	 * @var string
	 */
	public $referredBy;
	/*
	 * Contains information about the sales representatives to be assigned to
	 * the new client.
	 * 
	 * @var SalesRep[]
	 */
	public $salesReps;
	/*
	 * The ID of the site.
	 * 
	 * @var integer
	 */
	public $siteId;
	/*
	 * The client’s state.
	 * 
	 * @var string
	 */
	public $state;
	/*
	 * The client’s status.
	 * 
	 * @var string
	 */
	public $status;
	/*
	 * When `true`, indicates that test mode is enabled. The method is
	 * validated, but no client data is added or updated.<br />  Default:
	 * **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * The client’s system-generated ID at the business. This value cannot
	 * be changed by business owners and is always unique across all clients
	 * at the business. This ID is not widely used in the Public API, but can
	 * be used by your application to uniquely identify clients.
	 * 
	 * @var integer
	 */
	public $uniqueId;
	/*
	 * The client’s work phone extension number.
	 * 
	 * @var string
	 */
	public $workExtension;
	/*
	 * The client’s work phone number.
	 * 
	 * @var string
	 */
	public $workPhone;
	/*
	 * Contains any yellow alert information entered by the business owner
	 * for the client.
	 * 
	 * @var string
	 */
	public $yellowAlert;
	/*
	 * When `true`, indicates that the client opts to receive schedule
	 * emails.
	 * 
	 * @var boolean
	 */
	public $sendScheduleEmails;
	/*
	 * When `true`, indicates that the client opts to receive account emails.
	 * 
	 * @var boolean
	 */
	public $sendAccountEmails;
	/*
	 * When `true`, indicates that the client opts to receive promotional
	 * emails.
	 * 
	 * @var boolean
	 */
	public $sendPromotionalEmails;
	/*
	 * Constructor
	 */
	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}
