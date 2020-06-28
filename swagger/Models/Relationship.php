<?php

namespace App\MindBody\Models;

/**
 * Jim is a RelationshipName1 of John. John is a RelationshipName2 of
 * Jim.
 */
class Relationship extends BaseModel
{
	/**
	 * The ID of the relationship.
	 * 
	 * @var integer
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
			'Id' => 'id',
			'RelationshipName1' => 'relationshipName1',
			'RelationshipName2' => 'relationshipName2',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'relationshipName1' => 'RelationshipName1',
			'relationshipName2' => 'RelationshipName2',
			];
	}
}
