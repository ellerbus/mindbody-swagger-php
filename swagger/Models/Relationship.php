<?php

namespace App\Mindbody\Models;

/**
 * Jim is a RelationshipName1 of John. John is a RelationshipName2 of
 * Jim.
 */
class Relationship extends BaseModel
{
	/**
	 * The ID of the relationship.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the first relationship.
	 * 
	 * @var string 
	 */
	public $relationshipName1;
	/**
	 * The name of the second relationship.
	 * 
	 * @var string 
	 */
	public $relationshipName2;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'RelationshipName1' => ['relationshipName1', 'string', null],
			'RelationshipName2' => ['relationshipName2', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'relationshipName1' => ['RelationshipName1', 'string', null],
			'relationshipName2' => ['RelationshipName2', 'string', null],
			];
	}
}
