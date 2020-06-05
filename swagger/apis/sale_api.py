from .base_api import BaseApi

from ..models.purchase_contract_request import PurchaseContractRequest
from ..models.checkout_shopping_cart_request import CheckoutShoppingCartRequest
from ..models.purchase_gift_card_request import PurchaseGiftCardRequest

class SaleApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('sale', site_id, authorization)

	def get_sales(self):
		pass

	def post_purchasecontract(self):
		pass

	def post_checkoutshoppingcart(self):
		pass

	def get_giftcards(self):
		pass

	def get_services(self):
		pass

	def get_products(self):
		pass

	def get_acceptedcardtypes(self):
		pass

	def get_contracts(self):
		pass

	def get_custompaymentmethods(self):
		pass

	def post_purchasegiftcard(self):
		pass

	def get_packages(self):
		pass

	def get_giftcardbalance(self):
		pass

