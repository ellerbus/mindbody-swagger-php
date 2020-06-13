from .base_api import BaseApi

from ..models.get_sales_request import GetSalesRequest
from ..models.get_sales_response import GetSalesResponse
from ..models.purchase_contract_request import PurchaseContractRequest
from ..models.purchase_contract_response import PurchaseContractResponse
from ..models.checkout_shopping_cart_request import CheckoutShoppingCartRequest
from ..models.get_giftcards_request import GetGiftcardsRequest
from ..models.get_gift_card_response import GetGiftCardResponse
from ..models.get_services_request import GetServicesRequest
from ..models.get_services_response import GetServicesResponse
from ..models.get_products_request import GetProductsRequest
from ..models.get_products_response import GetProductsResponse
from ..models.get_contracts_request import GetContractsRequest
from ..models.get_contracts_response import GetContractsResponse
from ..models.get_custompaymentmethods_request import GetCustompaymentmethodsRequest
from ..models.get_custom_payment_methods_response import GetCustomPaymentMethodsResponse
from ..models.purchase_gift_card_request import PurchaseGiftCardRequest
from ..models.purchase_gift_card_response import PurchaseGiftCardResponse
from ..models.get_packages_request import GetPackagesRequest
from ..models.get_packages_response import GetPackagesResponse
from ..models.get_giftcardbalance_request import GetGiftcardbalanceRequest
from ..models.get_gift_card_balance_response import GetGiftCardBalanceResponse

class SaleApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('sale', site_id, authorization)

	def get_sales(self, request):
		"""
		Get sales completed at a site.
		"""

		url = self.get_fullpath('sales')
		return self.client.get(url, self.site_id, self.authorization, request, GetSalesResponse)

	def post_purchasecontract(self, request):
		"""
		Allows a client to sign up for a contract or autopay using the
		information returned from the `GET Contracts` endpoint. The client can
		pay with a new credit card or with a stored credit card. The client
		must exist at the site specified before this call is made.    This
		endpoint allows a developer to specify whether a client pays now or
		pays on the `StartDate`.If you are building a client-facing
		experience, you should talk with the business owner to understand the
		owner’s policies before you give clients a choice of the two payment
		types.
		"""

		url = self.get_fullpath('purchasecontract')
		return self.client.post(url, self.site_id, self.authorization, request, PurchaseContractResponse)

	def post_checkoutshoppingcart(self, request):
		"""
		This endpoint provides a wide range of functionality. For example, you
		can use it when a client purchases new pricing options, retail
		products, packages, and tips. You can also combine purchasing a new
		pricing option and many other functions, such as booking a client into
		a class, booking a new appointment for a client, enrolling a client
		into an enrollment or course, or reconciling an unpaid, already booked
		appointment or class. Use this call when a client purchases:  * a
		pricing option, after calling `GET Services` and choosing a specific
		pricing option’s ID  * a retail product, after calling `GET
		Products` and choosing a specific retail product’s ID  * a package,
		after calling `GET Packages` and choosing a specific package’s ID  *
		a tip to give to a staff member, after calling `GET Staff` and
		choosing a specific staff member ID, and the amount that the client
		wants to tip  The documentation provides explanations of the request
		body and response, as well as the cart item metadata, payment item
		metadata, and purchased cart items.
		"""

		url = self.get_fullpath('checkoutshoppingcart')
		return self.client.post(url, self.site_id, self.authorization, request, None)

	def get_giftcards(self, request):
		"""
		Get gift cards available for purchase at a site.
		"""

		url = self.get_fullpath('giftcards')
		return self.client.get(url, self.site_id, self.authorization, request, GetGiftCardResponse)

	def get_services(self, request):
		"""
		Get pricing options available for purchase at a site
		"""

		url = self.get_fullpath('services')
		return self.client.get(url, self.site_id, self.authorization, request, GetServicesResponse)

	def get_products(self, request):
		"""
		Get retail products available for purchase at a site.
		"""

		url = self.get_fullpath('products')
		return self.client.get(url, self.site_id, self.authorization, request, GetProductsResponse)

	def get_acceptedcardtypes(self):
		"""
		Gets a list of card types that the site accepts. You can also use `GET
		Sites` to return the Site object, which contains individual accepted
		card types for requested sites.    This endpoint has no query
		parameters.The response returns a list of strings. Possible values
		are:  * Visa  * MasterCard  * Discover  * AMEX
		"""

		url = self.get_fullpath('acceptedcardtypes')
		return self.client.get(url, self.site_id, self.authorization, None, None)

	def get_contracts(self, request):
		"""
		Get contracts available for purchase at a site.
		"""

		url = self.get_fullpath('contracts')
		return self.client.get(url, self.site_id, self.authorization, request, GetContractsResponse)

	def get_custompaymentmethods(self, request):
		"""
		Get payment methods that can be used to pay for sales at a site.
		"""

		url = self.get_fullpath('custompaymentmethods')
		return self.client.get(url, self.site_id, self.authorization, request, GetCustomPaymentMethodsResponse)

	def post_purchasegiftcard(self, request):
		"""
		Allows a client to purchase a gift card from a business in a variety
		of designs. The card can be emailed to the recipient on a specific
		day, and a card title and a personal message can be added.
		"""

		url = self.get_fullpath('purchasegiftcard')
		return self.client.post(url, self.site_id, self.authorization, request, PurchaseGiftCardResponse)

	def get_packages(self, request):
		"""
		A package is typically used to combine multiple services and/or
		products into a single offering. Staff members can check out multiple
		appointments while selling the package, and can discount the items
		included. For example, a spa might bundle a massage, a pedicure, a
		manicure, a facial, and a few selected beauty products into a package.
		"""

		url = self.get_fullpath('packages')
		return self.client.get(url, self.site_id, self.authorization, request, GetPackagesResponse)

	def get_giftcardbalance(self, request):
		"""
		Get a gift card's remaining balance.
		"""

		url = self.get_fullpath('giftcardbalance')
		return self.client.get(url, self.site_id, self.authorization, request, GetGiftCardBalanceResponse)

