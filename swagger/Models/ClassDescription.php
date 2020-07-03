<?php

namespace App\Mindbody\Models;

/**
 * Represents a class definition. The class meets at the start time, goes
 * until the end time.
 */
class ClassDescription extends BaseModel
{
	/**
	 * When `true`, indicates that the business can assign this class
	 * description to new class schedules.<br />  When `false`, indicates
	 * that the business cannot assign this class description to new class
	 * schedules.
	 * 
	 * @var boolean 
	 */
	public $active;
	/**
	 * The long version of the class description.
	 * 
	 * @var string 
	 */
	public $description;
	/**
	 * The class description's ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The class description's image URL, if any. If it does not exist,
	 * nothing is returned.
	 * 
	 * @var string 
	 */
	public $imageUrl;
	/**
	 * The date this class description was last modified.
	 * 
	 * @var string format:date-time
	 */
	public $lastUpdated;
	/**
	 * The level information about this class.
	 * 
	 * @var Level 
	 */
	public $level;
	/**
	 * The name of this class description.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * Any notes about the class description.
	 * 
	 * @var string 
	 */
	public $notes;
	/**
	 * Any prerequisites for the class.
	 * 
	 * @var string 
	 */
	public $prereq;
	/**
	 * Contains information about the class description's program.
	 * 
	 * @var Program 
	 */
	public $program;
	/**
	 * Contains information about the class description's session type.
	 * 
	 * @var SessionType 
	 */
	public $sessionType;
	/**
	 * The category of this class description.
	 * 
	 * @var string 
	 */
	public $category;
	/**
	 * The category ID of this class description.
	 * 
	 * @var integer format:int32
	 */
	public $categoryId;
	/**
	 * The subcategory of this class description.
	 * 
	 * @var string 
	 */
	public $subcategory;
	/**
	 * The subcategory ID of this class description.
	 * 
	 * @var integer format:int32
	 */
	public $subcategoryId;

	protected function getInputMap()
	{
		return [
			'Active' => ['active', 'boolean', null],
			'Description' => ['description', 'string', null],
			'Id' => ['id', 'integer', 'int32'],
			'ImageURL' => ['imageUrl', 'string', null],
			'LastUpdated' => ['lastUpdated', 'string', 'date-time'],
			'Level' => ['level', Level::class, null],
			'Name' => ['name', 'string', null],
			'Notes' => ['notes', 'string', null],
			'Prereq' => ['prereq', 'string', null],
			'Program' => ['program', Program::class, null],
			'SessionType' => ['sessionType', SessionType::class, null],
			'Category' => ['category', 'string', null],
			'CategoryId' => ['categoryId', 'integer', 'int32'],
			'Subcategory' => ['subcategory', 'string', null],
			'SubcategoryId' => ['subcategoryId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'active' => ['Active', 'boolean', null],
			'description' => ['Description', 'string', null],
			'id' => ['Id', 'integer', 'int32'],
			'imageUrl' => ['ImageURL', 'string', null],
			'lastUpdated' => ['LastUpdated', 'string', 'date-time'],
			'level' => ['Level', Level::class, null],
			'name' => ['Name', 'string', null],
			'notes' => ['Notes', 'string', null],
			'prereq' => ['Prereq', 'string', null],
			'program' => ['Program', Program::class, null],
			'sessionType' => ['SessionType', SessionType::class, null],
			'category' => ['Category', 'string', null],
			'categoryId' => ['CategoryId', 'integer', 'int32'],
			'subcategory' => ['Subcategory', 'string', null],
			'subcategoryId' => ['SubcategoryId', 'integer', 'int32'],
			];
	}
}
