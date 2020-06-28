<?php

namespace App\MindBody\Models;

/*
 * A relation between two clients.
 */
class ClientRelationship extends BaseModel
{
	/*
	 * The RSSID of the related client.
	 * 
	 * @var string
	 */
	public $relatedClientId;
	/*
	 * Contains details about the relationship between two clients.
	 * 
	 * @var Relationship
	 */
	public $relationship;
	/*
	 * The name of the relationship of the related client.
	 * 
	 * @var string
	 */
	public $relationshipName;
	/*
	 * When true, this relationship is removed from the associated clients.
	 * 
	 * @var boolean
	 */
	public $delete;
}