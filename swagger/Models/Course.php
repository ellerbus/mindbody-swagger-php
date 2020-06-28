<?php

namespace App\MindBody\Models;

/**
 * A course.
 */
class Course extends BaseModel
{
	/**
	 * The course ID.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The course name.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * A description of the course.
	 * 
	 * @var string
	 */
	public $description;
	/**
	 * Any notes that have been written about the course.
	 * 
	 * @var string
	 */
	public $notes;
	/**
	 * Date and time that the course starts.
	 * 
	 * @var string
	 */
	public $startDate;
	/**
	 * Date and time that the course ends.
	 * 
	 * @var string
	 */
	public $endDate;
	/**
	 * Contains information about the location.
	 * 
	 * @var Location
	 */
	public $location;
	/**
	 * Contains information about the staff member in charge of organizing
	 * the event.
	 * 
	 * @var Staff
	 */
	public $organizer;
	/**
	 * Contains information about the service category to which the course
	 * belongs.
	 * 
	 * @var Program
	 */
	public $program;
	/**
	 * The URL of the image associated with this course, if one exists.
	 * 
	 * @var string
	 */
	public $imageUrl;
}
