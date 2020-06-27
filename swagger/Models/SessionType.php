<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class SessionType extends BaseModel
{
	/*
	 * Contains the class description session type.
	 * 
	 * @var string
	 */
	public $type;
	/*
	 * The default amount of time that a session of this type typically
	 * lasts.
	 * 
	 * @var integer
	 */
	public $defaultTimeLength;
	/*
	 * This session type’s unique ID.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The name of this session type.
	 * 
	 * @var string
	 */
	public $name;
	/*
	 * The number of sessions that this session type deducts from the pricing
	 * option used to pay for this type of session.
	 * 
	 * @var integer
	 */
	public $numDeducted;
	/*
	 * This session type’s service category ID.
	 * 
	 * @var integer
	 */
	public $programId;
	/*
	 * This session type’s category.
	 * 
	 * @var string
	 */
	public $category;
	/*
	 * This session type’s category ID.
	 * 
	 * @var integer
	 */
	public $categoryId;
	/*
	 * This session type’s subcategory.
	 * 
	 * @var string
	 */
	public $subcategory;
	/*
	 * This session type’s subcategory ID.
	 * 
	 * @var integer
	 */
	public $subcategoryId;
}
