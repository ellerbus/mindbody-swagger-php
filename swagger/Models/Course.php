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
	 * @var integer format:int64
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
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * Date and time that the course ends.
	 * 
	 * @var string format:date-time
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

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int64'],
			'Name' => ['name', 'string', null],
			'Description' => ['description', 'string', null],
			'Notes' => ['notes', 'string', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'Location' => ['location', Location::class, null],
			'Organizer' => ['organizer', Staff::class, null],
			'Program' => ['program', Program::class, null],
			'ImageUrl' => ['imageUrl', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int64'],
			'name' => ['Name', 'string', null],
			'description' => ['Description', 'string', null],
			'notes' => ['Notes', 'string', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'location' => ['Location', Location::class, null],
			'organizer' => ['Organizer', Staff::class, null],
			'program' => ['Program', Program::class, null],
			'imageUrl' => ['ImageUrl', 'string', null],
			];
	}
}
