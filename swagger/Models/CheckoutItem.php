<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class CheckoutItem extends BaseModel
{
	/**
	 * The type of item. Possible values are:  * Service - Indicates that
	 * this item is a pricing option.  * Product - Indicates that this item
	 * is a retail product.  * Package - Indicates that this item is a
	 * package.  * Tip - Indicates that this item is a tip.
	 * 
	 * @var string
	 */
	public $type;
	/**
	 * Contains information about the item to be purchased. See [Cart Item Me
	 * tadata](https://developers.mindbodyonline.com/PublicDocumentation/V6#c
	 * art-item-metadata) for more information.
	 * 
	 * @var object
	 */
	public $metadata;

	protected function getInputMap()
	{
		return [
			'Type' => 'type',
			'Metadata' => 'metadata',
			];
	}

	protected function getOutputMap()
	{
		return [
			'type' => 'Type',
			'metadata' => 'Metadata',
			];
	}
}
