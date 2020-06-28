<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetGiftCardsRequest extends BaseModel
{
	/**
	 * When included, returns gift cards that are sold at the provided
	 * location ID.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * When `true`, only returns gift cards that are sold online.<br />
	 * Default: **false**
	 * 
	 * @var boolean 
	 */
	public $soldOnline;
	/**
	 * Filters the results to the requested gift card IDs.<br />  Default:
	 * **all** gift cards.
	 * 
	 * @var integer[] 
	 */
	public $ids;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'LocationId' => ['locationId', 'integer', 'int32'],
			'SoldOnline' => ['soldOnline', 'boolean', null],
			'Ids' => ['ids', 'array', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'locationId' => ['LocationId', 'integer', 'int32'],
			'soldOnline' => ['SoldOnline', 'boolean', null],
			'ids' => ['Ids', 'array', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
