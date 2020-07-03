<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GiftCard extends BaseModel
{
	/**
	 * The gift card's `ProductID`.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The IDs of the locations where the gift card is sold.
	 * 
	 * @var integer[] 
	 */
	public $locationIds;
	/**
	 * A description of the gift card.
	 * 
	 * @var string 
	 */
	public $description;
	/**
	 * When `true`, indicates that the gift card can be edited by the client.
	 * 
	 * @var boolean 
	 */
	public $editableByConsumer;
	/**
	 * The value of the gift card.
	 * 
	 * @var number format:double
	 */
	public $cardValue;
	/**
	 * The sale price of the gift card, if applicable.
	 * 
	 * @var number format:double
	 */
	public $salePrice;
	/**
	 * When `true`, indicates that the gift card is sold online.
	 * 
	 * @var boolean 
	 */
	public $soldOnline;
	/**
	 * A list of IDs for membership restrictions, if this card is restricted
	 * to members with certain types of memberships.
	 * 
	 * @var integer[] 
	 */
	public $membershipRestrictionIds;
	/**
	 * The terms of the gift card.
	 * 
	 * @var string 
	 */
	public $giftCardTerms;
	/**
	 * Contact information for the gift card.
	 * 
	 * @var string 
	 */
	public $contactInfo;
	/**
	 * When `true`, indicates that the logo should be displayed on the gift
	 * card.
	 * 
	 * @var boolean 
	 */
	public $displayLogo;
	/**
	 * A list of layouts available for the gift card.
	 * 
	 * @var GiftCardLayout[] 
	 */
	public $layouts;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'LocationIds' => ['locationIds', 'array', null],
			'Description' => ['description', 'string', null],
			'EditableByConsumer' => ['editableByConsumer', 'boolean', null],
			'CardValue' => ['cardValue', 'number', 'double'],
			'SalePrice' => ['salePrice', 'number', 'double'],
			'SoldOnline' => ['soldOnline', 'boolean', null],
			'MembershipRestrictionIds' => ['membershipRestrictionIds', 'array', null],
			'GiftCardTerms' => ['giftCardTerms', 'string', null],
			'ContactInfo' => ['contactInfo', 'string', null],
			'DisplayLogo' => ['displayLogo', 'boolean', null],
			'Layouts' => ['layouts', 'array', GiftCardLayout::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'locationIds' => ['LocationIds', 'array', null],
			'description' => ['Description', 'string', null],
			'editableByConsumer' => ['EditableByConsumer', 'boolean', null],
			'cardValue' => ['CardValue', 'number', 'double'],
			'salePrice' => ['SalePrice', 'number', 'double'],
			'soldOnline' => ['SoldOnline', 'boolean', null],
			'membershipRestrictionIds' => ['MembershipRestrictionIds', 'array', null],
			'giftCardTerms' => ['GiftCardTerms', 'string', null],
			'contactInfo' => ['ContactInfo', 'string', null],
			'displayLogo' => ['DisplayLogo', 'boolean', null],
			'layouts' => ['Layouts', 'array', GiftCardLayout::class],
			];
	}
}
