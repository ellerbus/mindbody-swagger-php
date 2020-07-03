<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class Staff extends BaseModel
{
	/**
	 * The address of the staff member who is teaching the class.
	 * 
	 * @var string 
	 */
	public $address;
	/**
	 * When `true`, indicates that the staff member offers appointments.<br
	 * />  When `false`, indicates that the staff member does not offer
	 * appointments.
	 * 
	 * @var boolean 
	 */
	public $appointmentInstructor;
	/**
	 * When `true`, indicates that the staff member can be scheduled for
	 * overlapping services.<br />  When `false`, indicates that the staff
	 * can only be scheduled for one service at a time in any given time-
	 * frame.
	 * 
	 * @var boolean 
	 */
	public $alwaysAllowDoubleBooking;
	/**
	 * The staff member’s biography. This string contains HTML.
	 * 
	 * @var string 
	 */
	public $bio;
	/**
	 * The staff member’s city.
	 * 
	 * @var string 
	 */
	public $city;
	/**
	 * The staff member’s country.
	 * 
	 * @var string 
	 */
	public $country;
	/**
	 * The staff member’s email address.
	 * 
	 * @var string 
	 */
	public $email;
	/**
	 * The staff member’s first name.
	 * 
	 * @var string 
	 */
	public $firstName;
	/**
	 * The staff member’s home phone number.
	 * 
	 * @var string 
	 */
	public $homePhone;
	/**
	 * The ID assigned to the staff member.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * When `true`, indicates that the staff member is an independent
	 * contractor.  When `false`, indicates that the staff member is not an
	 * independent contractor.
	 * 
	 * @var boolean 
	 */
	public $independentContractor;
	/**
	 * When `true`, indicates that the staff member is male.  When `false`,
	 * indicates that the staff member is female.
	 * 
	 * @var boolean 
	 */
	public $isMale;
	/**
	 * The staff member’s last name.
	 * 
	 * @var string 
	 */
	public $lastName;
	/**
	 * The staff member’s mobile phone number.
	 * 
	 * @var string 
	 */
	public $mobilePhone;
	/**
	 * The staff member’s name.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * The staff member’s postal code.
	 * 
	 * @var string 
	 */
	public $postalCode;
	/**
	 * When `true`, indicates that the staff member can teach classes.  When
	 * `false`, indicates that the staff member cannot teach classes.
	 * 
	 * @var boolean 
	 */
	public $classTeacher;
	/**
	 * If configured by the business owner, this field determines a staff
	 * member’s weight when sorting. Use this field to sort staff members
	 * on your interface.
	 * 
	 * @var integer format:int32
	 */
	public $sortOrder;
	/**
	 * The staff member’s state.
	 * 
	 * @var string 
	 */
	public $state;
	/**
	 * The staff member’s work phone number.
	 * 
	 * @var string 
	 */
	public $workPhone;
	/**
	 * The URL of the staff member’s image, if one has been uploaded.
	 * 
	 * @var string 
	 */
	public $imageUrl;
	/**
	 * A list of appointments for the staff.
	 * 
	 * @var Appointment[] 
	 */
	public $appointments;
	/**
	 * A list of unavailabilities for the staff.
	 * 
	 * @var Unavailability[] 
	 */
	public $unavailabilities;
	/**
	 * A list of availabilities for the staff.
	 * 
	 * @var Availability[] 
	 */
	public $availabilities;

	protected function getInputMap()
	{
		return [
			'Address' => ['address', 'string', null],
			'AppointmentInstructor' => ['appointmentInstructor', 'boolean', null],
			'AlwaysAllowDoubleBooking' => ['alwaysAllowDoubleBooking', 'boolean', null],
			'Bio' => ['bio', 'string', null],
			'City' => ['city', 'string', null],
			'Country' => ['country', 'string', null],
			'Email' => ['email', 'string', null],
			'FirstName' => ['firstName', 'string', null],
			'HomePhone' => ['homePhone', 'string', null],
			'Id' => ['id', 'integer', 'int64'],
			'IndependentContractor' => ['independentContractor', 'boolean', null],
			'IsMale' => ['isMale', 'boolean', null],
			'LastName' => ['lastName', 'string', null],
			'MobilePhone' => ['mobilePhone', 'string', null],
			'Name' => ['name', 'string', null],
			'PostalCode' => ['postalCode', 'string', null],
			'ClassTeacher' => ['classTeacher', 'boolean', null],
			'SortOrder' => ['sortOrder', 'integer', 'int32'],
			'State' => ['state', 'string', null],
			'WorkPhone' => ['workPhone', 'string', null],
			'ImageUrl' => ['imageUrl', 'string', null],
			'Appointments' => ['appointments', 'array', Appointment::class],
			'Unavailabilities' => ['unavailabilities', 'array', Unavailability::class],
			'Availabilities' => ['availabilities', 'array', Availability::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'address' => ['Address', 'string', null],
			'appointmentInstructor' => ['AppointmentInstructor', 'boolean', null],
			'alwaysAllowDoubleBooking' => ['AlwaysAllowDoubleBooking', 'boolean', null],
			'bio' => ['Bio', 'string', null],
			'city' => ['City', 'string', null],
			'country' => ['Country', 'string', null],
			'email' => ['Email', 'string', null],
			'firstName' => ['FirstName', 'string', null],
			'homePhone' => ['HomePhone', 'string', null],
			'id' => ['Id', 'integer', 'int64'],
			'independentContractor' => ['IndependentContractor', 'boolean', null],
			'isMale' => ['IsMale', 'boolean', null],
			'lastName' => ['LastName', 'string', null],
			'mobilePhone' => ['MobilePhone', 'string', null],
			'name' => ['Name', 'string', null],
			'postalCode' => ['PostalCode', 'string', null],
			'classTeacher' => ['ClassTeacher', 'boolean', null],
			'sortOrder' => ['SortOrder', 'integer', 'int32'],
			'state' => ['State', 'string', null],
			'workPhone' => ['WorkPhone', 'string', null],
			'imageUrl' => ['ImageUrl', 'string', null],
			'appointments' => ['Appointments', 'array', Appointment::class],
			'unavailabilities' => ['Unavailabilities', 'array', Unavailability::class],
			'availabilities' => ['Availabilities', 'array', Availability::class],
			];
	}
}
