<?php

namespace App\MindBody\Models;

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
	 * @var integer
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
	 * @var string
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
	 * @var integer
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
	 * @var integer
	 */
	public $subcategoryId;

	protected function getInputMap()
	{
		return [
			'Active' => 'active',
			'Description' => 'description',
			'Id' => 'id',
			'ImageURL' => 'imageUrl',
			'LastUpdated' => 'lastUpdated',
			'Level' => ['level', Level::class],
			'Name' => 'name',
			'Notes' => 'notes',
			'Prereq' => 'prereq',
			'Program' => ['program', Program::class],
			'SessionType' => ['sessionType', SessionType::class],
			'Category' => 'category',
			'CategoryId' => 'categoryId',
			'Subcategory' => 'subcategory',
			'SubcategoryId' => 'subcategoryId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'active' => 'Active',
			'description' => 'Description',
			'id' => 'Id',
			'imageUrl' => 'ImageURL',
			'lastUpdated' => 'LastUpdated',
			'level' => 'Level',
			'name' => 'Name',
			'notes' => 'Notes',
			'prereq' => 'Prereq',
			'program' => 'Program',
			'sessionType' => 'SessionType',
			'category' => 'Category',
			'categoryId' => 'CategoryId',
			'subcategory' => 'Subcategory',
			'subcategoryId' => 'SubcategoryId',
			];
	}
}
