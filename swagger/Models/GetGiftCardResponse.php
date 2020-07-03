<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetGiftCardResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the gift cards.
	 * 
	 * @var GiftCard[] 
	 */
	public $giftCards;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'GiftCards' => ['giftCards', 'array', GiftCard::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'giftCards' => ['GiftCards', 'array', GiftCard::class],
			];
	}
}
