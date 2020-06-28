<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\GetSalesRequest;
use App\MindBody\Models\GetSalesResponse;
use App\MindBody\Models\PurchaseContractRequest;
use App\MindBody\Models\PurchaseContractResponse;
use App\MindBody\Models\CheckoutShoppingCartRequest;
use App\MindBody\Models\GetGiftCardsRequest;
use App\MindBody\Models\GetGiftCardResponse;
use App\MindBody\Models\GetServicesRequest;
use App\MindBody\Models\GetServicesResponse;
use App\MindBody\Models\GetProductsRequest;
use App\MindBody\Models\GetProductsResponse;
use App\MindBody\Models\GetContractsRequest;
use App\MindBody\Models\GetContractsResponse;
use App\MindBody\Models\GetCustomPaymentMethodsRequest;
use App\MindBody\Models\GetCustomPaymentMethodsResponse;
use App\MindBody\Models\PurchaseGiftCardRequest;
use App\MindBody\Models\PurchaseGiftCardResponse;
use App\MindBody\Models\GetPackagesRequest;
use App\MindBody\Models\GetPackagesResponse;
use App\MindBody\Models\GetGiftCardBalanceRequest;
use App\MindBody\Models\GetGiftCardBalanceResponse;

class SaleApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('sale', $siteId, $authorization);
	}

	/**
	 * Get sales completed at a site.
	 */
	public function getSales($request)
	{
		$url = $this->getFullPath('sales');

		return $this->client->get($url, $request, GetSalesResponse::class);
	}

	/**
	 * Allows a client to sign up for a contract or autopay using the
	 * information returned from the `GET Contracts` endpoint. The client can
	 * pay with a new credit card or with a stored credit card. The client
	 * must exist at the site specified before this call is made.    This
	 * endpoint allows a developer to specify whether a client pays now or
	 * pays on the `StartDate`.If you are building a client-facing
	 * experience, you should talk with the business owner to understand the
	 * owner’s policies before you give clients a choice of the two payment
	 * types.
	 */
	public function purchaseContract($request)
	{
		$url = $this->getFullPath('purchasecontract');

		return $this->client->post($url, $request, PurchaseContractResponse::class);
	}

	/**
	 * This endpoint provides a wide range of functionality. For example, you
	 * can use it when a client purchases new pricing options, retail
	 * products, packages, and tips. You can also combine purchasing a new
	 * pricing option and many other functions, such as booking a client into
	 * a class, booking a new appointment for a client, enrolling a client
	 * into an enrollment or course, or reconciling an unpaid, already booked
	 * appointment or class. Use this call when a client purchases:  * a
	 * pricing option, after calling `GET Services` and choosing a specific
	 * pricing option’s ID  * a retail product, after calling `GET
	 * Products` and choosing a specific retail product’s ID  * a package,
	 * after calling `GET Packages` and choosing a specific package’s ID  *
	 * a tip to give to a staff member, after calling `GET Staff` and
	 * choosing a specific staff member ID, and the amount that the client
	 * wants to tip  The documentation provides explanations of the request
	 * body and response, as well as the cart item metadata, payment item
	 * metadata, and purchased cart items.
	 */
	public function checkoutShoppingCart($request)
	{
		$url = $this->getFullPath('checkoutshoppingcart');

		return $this->client->post($url, $request, null);
	}

	/**
	 * Get gift cards available for purchase at a site.
	 */
	public function getGiftCards($request)
	{
		$url = $this->getFullPath('giftcards');

		return $this->client->get($url, $request, GetGiftCardResponse::class);
	}

	/**
	 * Get pricing options available for purchase at a site
	 */
	public function getServices($request)
	{
		$url = $this->getFullPath('services');

		return $this->client->get($url, $request, GetServicesResponse::class);
	}

	/**
	 * Get retail products available for purchase at a site.
	 */
	public function getProducts($request)
	{
		$url = $this->getFullPath('products');

		return $this->client->get($url, $request, GetProductsResponse::class);
	}

	/**
	 * Gets a list of card types that the site accepts. You can also use `GET
	 * Sites` to return the Site object, which contains individual accepted
	 * card types for requested sites.    This endpoint has no query
	 * parameters.The response returns a list of strings. Possible values
	 * are:  * Visa  * MasterCard  * Discover  * AMEX
	 */
	public function getAcceptedCardTypes()
	{
		$url = $this->getFullPath('acceptedcardtypes');

		return $this->client->get($url, null, null);
	}

	/**
	 * Get contracts available for purchase at a site.
	 */
	public function getContracts($request)
	{
		$url = $this->getFullPath('contracts');

		return $this->client->get($url, $request, GetContractsResponse::class);
	}

	/**
	 * Get payment methods that can be used to pay for sales at a site.
	 */
	public function getCustomPaymentMethods($request)
	{
		$url = $this->getFullPath('custompaymentmethods');

		return $this->client->get($url, $request, GetCustomPaymentMethodsResponse::class);
	}

	/**
	 * Allows a client to purchase a gift card from a business in a variety
	 * of designs. The card can be emailed to the recipient on a specific
	 * day, and a card title and a personal message can be added.
	 */
	public function purchaseGiftCard($request)
	{
		$url = $this->getFullPath('purchasegiftcard');

		return $this->client->post($url, $request, PurchaseGiftCardResponse::class);
	}

	/**
	 * A package is typically used to combine multiple services and/or
	 * products into a single offering. Staff members can check out multiple
	 * appointments while selling the package, and can discount the items
	 * included. For example, a spa might bundle a massage, a pedicure, a
	 * manicure, a facial, and a few selected beauty products into a package.
	 */
	public function getPackages($request)
	{
		$url = $this->getFullPath('packages');

		return $this->client->get($url, $request, GetPackagesResponse::class);
	}

	/**
	 * Get a gift card's remaining balance.
	 */
	public function getGiftCardBalance($request)
	{
		$url = $this->getFullPath('giftcardbalance');

		return $this->client->get($url, $request, GetGiftCardBalanceResponse::class);
	}

}
