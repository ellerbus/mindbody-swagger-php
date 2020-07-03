<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class SessionType extends BaseModel
{
	/**
	 * Contains the class description session type.
	 * 
	 * @var string 
	 */
	public $type;
	/**
	 * The default amount of time that a session of this type typically
	 * lasts.
	 * 
	 * @var integer format:int32
	 */
	public $defaultTimeLength;
	/**
	 * This session type’s unique ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of this session type.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * The number of sessions that this session type deducts from the pricing
	 * option used to pay for this type of session.
	 * 
	 * @var integer format:int32
	 */
	public $numDeducted;
	/**
	 * This session type’s service category ID.
	 * 
	 * @var integer format:int32
	 */
	public $programId;
	/**
	 * This session type’s category.
	 * 
	 * @var string 
	 */
	public $category;
	/**
	 * This session type’s category ID.
	 * 
	 * @var integer format:int32
	 */
	public $categoryId;
	/**
	 * This session type’s subcategory.
	 * 
	 * @var string 
	 */
	public $subcategory;
	/**
	 * This session type’s subcategory ID.
	 * 
	 * @var integer format:int32
	 */
	public $subcategoryId;

	protected function getInputMap()
	{
		return [
			'Type' => ['type', 'string', null],
			'DefaultTimeLength' => ['defaultTimeLength', 'integer', 'int32'],
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'NumDeducted' => ['numDeducted', 'integer', 'int32'],
			'ProgramId' => ['programId', 'integer', 'int32'],
			'Category' => ['category', 'string', null],
			'CategoryId' => ['categoryId', 'integer', 'int32'],
			'Subcategory' => ['subcategory', 'string', null],
			'SubcategoryId' => ['subcategoryId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'type' => ['Type', 'string', null],
			'defaultTimeLength' => ['DefaultTimeLength', 'integer', 'int32'],
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'numDeducted' => ['NumDeducted', 'integer', 'int32'],
			'programId' => ['ProgramId', 'integer', 'int32'],
			'category' => ['Category', 'string', null],
			'categoryId' => ['CategoryId', 'integer', 'int32'],
			'subcategory' => ['Subcategory', 'string', null],
			'subcategoryId' => ['SubcategoryId', 'integer', 'int32'],
			];
	}
}
