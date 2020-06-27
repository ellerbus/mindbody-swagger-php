<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GiftCard extends BaseModel
{
	/*
	 * The gift card's `ProductID`.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The IDs of the locations where the gift card is sold.
	 * 
	 * @var integer[]
	 */
	public $locationIds;
	/*
	 * A description of the gift card.
	 * 
	 * @var string
	 */
	public $description;
	/*
	 * When `true`, indicates that the gift card can be edited by the client.
	 * 
	 * @var boolean
	 */
	public $editableByConsumer;
	/*
	 * The value of the gift card.
	 * 
	 * @var number
	 */
	public $cardValue;
	/*
	 * The sale price of the gift card, if applicable.
	 * 
	 * @var number
	 */
	public $salePrice;
	/*
	 * When `true`, indicates that the gift card is sold online.
	 * 
	 * @var boolean
	 */
	public $soldOnline;
	/*
	 * A list of IDs for membership restrictions, if this card is restricted
	 * to members with certain types of memberships.
	 * 
	 * @var integer[]
	 */
	public $membershipRestrictionIds;
	/*
	 * The terms of the gift card.
	 * 
	 * @var string
	 */
	public $giftCardTerms;
	/*
	 * Contact information for the gift card.
	 * 
	 * @var string
	 */
	public $contactInfo;
	/*
	 * When `true`, indicates that the logo should be displayed on the gift
	 * card.
	 * 
	 * @var boolean
	 */
	public $displayLogo;
	/*
	 * A list of layouts available for the gift card.
	 * 
	 * @var GiftCardLayout[]
	 */
	public $layouts;
}
