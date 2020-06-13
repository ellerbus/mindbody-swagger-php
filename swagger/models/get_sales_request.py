from .base_model import BaseModel


class GetSalesRequest(BaseModel):
	"""
	no description available

	Attributes:

		sale_id
		Filters results to the requested sale ID.

		start_sale_date_time
		Filters results to sales that happened after this date and time.

		end_sale_date_time
		Filters results to sales that happened before this date and time.

		payment_method_id
		Filters results to sales paid for by the given payment method ID.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'SaleId': 'sale_id',
		'StartSaleDateTime': 'start_sale_date_time',
		'EndSaleDateTime': 'end_sale_date_time',
		'PaymentMethodId': 'payment_method_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'sale_id': 'SaleId',
		'start_sale_date_time': 'StartSaleDateTime',
		'end_sale_date_time': 'EndSaleDateTime',
		'payment_method_id': 'PaymentMethodId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	sale_id = None
	start_sale_date_time = None
	end_sale_date_time = None
	payment_method_id = None
	limit = None
	offset = None

