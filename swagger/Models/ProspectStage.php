<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class ProspectStage extends BaseModel
{
	/**
	 * When `true`, indicates that the client is a prospect at the business
	 * and has not yet purchased any of the business pricing options.  When
	 * `false`, indicates that the client has already purchased at least one
	 * pricing option from the business.
	 * 
	 * @var boolean 
	 */
	public $active;
	/**
	 * A description of the prospect stage.
	 * 
	 * @var string 
	 */
	public $description;
	/**
	 * The ID of the prospect stage assigned to the client.
	 * 
	 * @var integer format:int32
	 */
	public $id;

	protected function getInputMap()
	{
		return [
			'Active' => ['active', 'boolean', null],
			'Description' => ['description', 'string', null],
			'Id' => ['id', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'active' => ['Active', 'boolean', null],
			'description' => ['Description', 'string', null],
			'id' => ['Id', 'integer', 'int32'],
			];
	}
}
