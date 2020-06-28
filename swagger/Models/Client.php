<?php

namespace App\MindBody\Models;

/**
 * A Client
 */
class Client extends BaseModel
{
	/**
	 * The gender of staff member with whom the client prefers to book
	 * appointments.
	 * 
	 * @var string
	 */
	public $appointmentGenderPreference;
	/**
	 * The client’s date of birth.
	 * 
	 * @var string
	 */
	public $birthDate;
	/**
	 * The client’s country.
	 * 
	 * @var string
	 */
	public $country;
	/**
	 * The date the client’s profile was created and added to the business,
	 * either by the client from the online store, or by a staff member. This
	 * value always returns in the format `yyyy-mm-ddThh:mm:ss:ms`.
	 * 
	 * @var string
	 */
	public $creationDate;
	/**
	 * Contains information about the custom client fields assigned to the
	 * client.
	 * 
	 * @var CustomClientFieldValue[]
	 */
	public $customClientFields;
	/**
	 * Contains information about the client’s credit card.
	 * 
	 * @var ClientCreditCard
	 */
	public $clientCreditCard;
	/**
	 * Contains the IDs of the client’s assigned ClientIndexes and
	 * ClientIndexValues.
	 * 
	 * @var AssignedClientIndex[]
	 */
	public $clientIndexes;
	/**
	 * Contains information about the relationship between two clients.
	 * 
	 * @var ClientRelationship[]
	 */
	public $clientRelationships;
	/**
	 * The date of the client’s first booked appointment at the business.
	 * 
	 * @var string
	 */
	public $firstAppointmentDate;
	/**
	 * The client’s first name.
	 * 
	 * @var string
	 */
	public $firstName;
	/**
	 * The client’s ID, as configured by the business owner. This is the
	 * client’s barcode ID if the business owner assigns barcodes to
	 * clients. This ID is used throughout the Public API for client-related
	 * Public API calls. When used in a POST `UpdateClient` request, the `Id`
	 * is used to identify the client for the update.
	 * 
	 * @var string
	 */
	public $id;
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
	 * The client’s last name.
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
	 * The ID of the [membership icon](https://support.mindbodyonline.com/s/a
	 * rticle/203259703-Membership-Setup-screen?language=en_US) displayed
	 * next to the client’s name, if the client has a membership on their
	 * account.
	 * 
	 * @var integer
	 */
	public $membershipIcon;
	/**
	 * The client’s mobile provider.
	 * 
	 * @var integer
	 */
	public $mobileProvider;
	/**
	 * Any notes entered on the client’s account by staff members. This
	 * value should never be shown to clients unless the business owner has a
	 * specific reason for showing them.
	 * 
	 * @var string
	 */
	public $notes;
	/**
	 * The client’s state.
	 * 
	 * @var string
	 */
	public $state;
	/**
	 * The client’s system-generated ID at the business. This value cannot
	 * be changed by business owners and is always unique across all clients
	 * at the business. This ID is not widely used in the Public API, but can
	 * be used by your application to uniquely identify clients.
	 * 
	 * @var integer
	 */
	public $uniqueId;
	/**
	 * The UTC date and time when the client’s information was last
	 * modified.
	 * 
	 * @var string
	 */
	public $lastModifiedDateTime;
	/**
	 * Contains any red alert information entered by the business owner for
	 * the client.
	 * 
	 * @var string
	 */
	public $redAlert;
	/**
	 * Contains any yellow alert information entered by the business owner
	 * for the client.
	 * 
	 * @var string
	 */
	public $yellowAlert;
	/**
	 * The client’s middle name.
	 * 
	 * @var string
	 */
	public $middleName;
	/**
	 * Contains information about the client [prospect stage](https://support
	 * .mindbodyonline.com/s/article/206176457-Prospect-
	 * Stages?language=en_US).
	 * 
	 * @var ProspectStage
	 */
	public $prospectStage;
	/**
	 * The client’s email address.
	 * 
	 * @var string
	 */
	public $email;
	/**
	 * The client’s mobile phone number.
	 * 
	 * @var string
	 */
	public $mobilePhone;
	/**
	 * The client’s home phone number.
	 * 
	 * @var string
	 */
	public $homePhone;
	/**
	 * The client’s work phone number.
	 * 
	 * @var string
	 */
	public $workPhone;
	/**
	 * The client’s current [account balance](https://mindbody-online-
	 * support.force.com/support/s/article/203262013-Adding-account-payments-
	 * video-tutorial?language=en_US).
	 * 
	 * @var number
	 */
	public $accountBalance;
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
	 * The client’s city.
	 * 
	 * @var string
	 */
	public $city;
	/**
	 * The client’s postal code.
	 * 
	 * @var string
	 */
	public $postalCode;
	/**
	 * The client’s work phone extension number.
	 * 
	 * @var string
	 */
	public $workExtension;
	/**
	 * Specifies how the client was referred to the business. You can get a
	 * list of possible strings using the `GetClientReferralTypes` endpoint.
	 * 
	 * @var string
	 */
	public $referredBy;
	/**
	 * The URL of the client’s photo for the client profile.
	 * 
	 * @var string
	 */
	public $photoUrl;
	/**
	 * The name of the client’s emergency contact.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoName;
	/**
	 * The email address of the client’s emergency contact.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoEmail;
	/**
	 * The phone number of the client’s emergency contact.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoPhone;
	/**
	 * The client’s relationship with the emergency contact.
	 * 
	 * @var string
	 */
	public $emergencyContactInfoRelationship;
	/**
	 * The gender of the client.
	 * 
	 * @var string
	 */
	public $gender;
	/**
	 * The last [formula note](https://support.mindbodyonline.com/s/article/2
	 * 03259903-Appointments-Formula-notes?language=en_US) entered for the
	 * client.
	 * 
	 * @var string
	 */
	public $lastFormulaNotes;
	/**
	 * When `true`, indicates that the client’s profile is marked as active
	 * on the site.<br />  When `false`, the client’s profile is inactive.
	 * 
	 * @var boolean
	 */
	public $active;
	/**
	 * A list of sales representatives.
	 * 
	 * @var SalesRep[]
	 */
	public $salesReps;
	/**
	 * The status of the client in the business. Possible values are:  *
	 * Declined  * Non-Member  * Active  * Expired  * Suspended  * Terminated
	 * 
	 * @var string
	 */
	public $status;
	/**
	 * The action taken.
	 * 
	 * @var string
	 */
	public $action;
	/**
	 * When `true`, indicates that the client has opted to receive general
	 * account notifications by email. This property is editable.   <br
	 * />Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendAccountEmails;
	/**
	 * When `true`, indicates that the client has opted to receive general
	 * account notifications by text message. This parameter cannot be
	 * updated by developers. If included in a request, it is ignored.
	 * 
	 * @var boolean
	 */
	public $sendAccountTexts;
	/**
	 * When `true`, indicates that the client has opted to receive
	 * promotional notifications by email. This property is editable.   <br
	 * />Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendPromotionalEmails;
	/**
	 * When `true`, indicates that the client has opted to receive
	 * promotional notifications by text message. This parameter cannot be
	 * updated by developers. If included in a request, it is ignored.
	 * 
	 * @var boolean
	 */
	public $sendPromotionalTexts;
	/**
	 * When `true`, indicates that the client has opted to receive schedule
	 * notifications by email. This property is editable.   <br />Default:
	 * **false**
	 * 
	 * @var boolean
	 */
	public $sendScheduleEmails;
	/**
	 * When `true`, indicates that the client has opted to receive schedule
	 * notifications by text message. This parameter cannot be updated by
	 * developers. If included in a request, it is ignored.
	 * 
	 * @var boolean
	 */
	public $sendScheduleTexts;
}
