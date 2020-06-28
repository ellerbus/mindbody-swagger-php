<?php

namespace App\MindBody\Clients;

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
	/*
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('sale', $siteId, $authorization);
	}

	/*
	 * Get sales completed at a site.
	 */
	public function GetSales($request)
	{
		$url = $this->getFullPath('sales');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetSalesResponse::class);
	}

	/*
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
	public function PurchaseContract($request)
	{
		$url = $this->getFullPath('purchasecontract');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, PurchaseContractResponse::class);
	}

	/*
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
	public function CheckoutShoppingCart($request)
	{
		$url = $this->getFullPath('checkoutshoppingcart');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, null);
	}

	/*
	 * Get gift cards available for purchase at a site.
	 */
	public function GetGiftCards($request)
	{
		$url = $this->getFullPath('giftcards');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetGiftCardResponse::class);
	}

	/*
	 * Get pricing options available for purchase at a site
	 */
	public function GetServices($request)
	{
		$url = $this->getFullPath('services');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetServicesResponse::class);
	}

	/*
	 * Get retail products available for purchase at a site.
	 */
	public function GetProducts($request)
	{
		$url = $this->getFullPath('products');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetProductsResponse::class);
	}

	/*
	 * Gets a list of card types that the site accepts. You can also use `GET
	 * Sites` to return the Site object, which contains individual accepted
	 * card types for requested sites.    This endpoint has no query
	 * parameters.The response returns a list of strings. Possible values
	 * are:  * Visa  * MasterCard  * Discover  * AMEX
	 */
	public function GetAcceptedCardTypes()
	{
		$url = $this->getFullPath('acceptedcardtypes');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, null, null);
	}

	/*
	 * Get contracts available for purchase at a site.
	 */
	public function GetContracts($request)
	{
		$url = $this->getFullPath('contracts');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetContractsResponse::class);
	}

	/*
	 * Get payment methods that can be used to pay for sales at a site.
	 */
	public function GetCustomPaymentMethods($request)
	{
		$url = $this->getFullPath('custompaymentmethods');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetCustomPaymentMethodsResponse::class);
	}

	/*
	 * Allows a client to purchase a gift card from a business in a variety
	 * of designs. The card can be emailed to the recipient on a specific
	 * day, and a card title and a personal message can be added.
	 */
	public function PurchaseGiftCard($request)
	{
		$url = $this->getFullPath('purchasegiftcard');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, PurchaseGiftCardResponse::class);
	}

	/*
	 * A package is typically used to combine multiple services and/or
	 * products into a single offering. Staff members can check out multiple
	 * appointments while selling the package, and can discount the items
	 * included. For example, a spa might bundle a massage, a pedicure, a
	 * manicure, a facial, and a few selected beauty products into a package.
	 */
	public function GetPackages($request)
	{
		$url = $this->getFullPath('packages');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetPackagesResponse::class);
	}

	/*
	 * Get a gift card's remaining balance.
	 */
	public function GetGiftCardBalance($request)
	{
		$url = $this->getFullPath('giftcardbalance');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetGiftCardBalanceResponse::class);
	}

}
