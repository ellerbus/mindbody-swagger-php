from .base_api import BaseApi

from ..models.get_sales_response import GetSalesResponse
from ..models.purchase_contract_request import PurchaseContractRequest
from ..models.purchase_contract_response import PurchaseContractResponse
from ..models.checkout_shopping_cart_request import CheckoutShoppingCartRequest
from ..models.get_gift_card_response import GetGiftCardResponse
from ..models.get_services_response import GetServicesResponse
from ..models.get_products_response import GetProductsResponse
from ..models.get_contracts_response import GetContractsResponse
from ..models.get_custom_payment_methods_response import GetCustomPaymentMethodsResponse
from ..models.purchase_gift_card_request import PurchaseGiftCardRequest
from ..models.purchase_gift_card_response import PurchaseGiftCardResponse
from ..models.get_packages_response import GetPackagesResponse
from ..models.get_gift_card_balance_response import GetGiftCardBalanceResponse

class SaleApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('sale', site_id, authorization)

	def get_sales(self, endSaleDateTime, limit, offset, paymentMethodId, saleId, startSaleDateTime):
		pass

	def post_purchasecontract(self, request):
		pass

	def post_checkoutshoppingcart(self, request):
		pass

	def get_giftcards(self, ids, limit, locationId, offset, soldOnline):
		pass

	def get_services(self, classId, classScheduleId, hideRelatedPrograms, limit, locationId, offset, programIds, sellOnline, serviceIds, sessionTypeIds, staffId):
		pass

	def get_products(self, categoryIds, limit, locationId, offset, productIds, searchText, sellOnline, subCategoryIds):
		pass

	def get_acceptedcardtypes(self):
		pass

	def get_contracts(self, locationId, consumerId, contractIds, limit, offset, soldOnline):
		pass

	def get_custompaymentmethods(self, limit, offset):
		pass

	def post_purchasegiftcard(self, request):
		pass

	def get_packages(self, limit, offset, packageIds, sellOnline):
		pass

	def get_giftcardbalance(self, barcodeId):
		pass

