<?php

namespace App\MindBody\Models;

/**
 * A relation between two clients.
 */
class ClientRelationship extends BaseModel
{
	/**
	 * The RSSID of the related client.
	 * 
	 * @var string 
	 */
	public $relatedClientId;
	/**
	 * Contains details about the relationship between two clients.
	 * 
	 * @var Relationship 
	 */
	public $relationship;
	/**
	 * The name of the relationship of the related client.
	 * 
	 * @var string 
	 */
	public $relationshipName;
	/**
	 * When true, this relationship is removed from the associated clients.
	 * 
	 * @var boolean 
	 */
	public $delete;

	protected function getInputMap()
	{
		return [
			'RelatedClientId' => ['relatedClientId', 'string', null],
			'Relationship' => ['relationship', Relationship::class, null],
			'RelationshipName' => ['relationshipName', 'string', null],
			'Delete' => ['delete', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'relatedClientId' => ['RelatedClientId', 'string', null],
			'relationship' => ['Relationship', Relationship::class, null],
			'relationshipName' => ['RelationshipName', 'string', null],
			'delete' => ['Delete', 'boolean', null],
			];
	}
}
