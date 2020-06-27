<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetGiftCardsRequest extends BaseModel
{
	/*
	 * When included, returns gift cards that are sold at the provided
	 * location ID.
	 * 
	 * @var integer
	 */
	public $locationId;
	/*
	 * When `true`, only returns gift cards that are sold online.<br />
	 * Default: **false**
	 * 
	 * @var boolean
	 */
	public $soldOnline;
	/*
	 * Filters the results to the requested gift card IDs.<br />  Default:
	 * **all** gift cards.
	 * 
	 * @var integer[]
	 */
	public $ids;
	/*
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/*
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
}
