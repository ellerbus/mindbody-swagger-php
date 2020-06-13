from .base_model import BaseModel


class PurchasedItem(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ProductID of the item.

		is_service
		When `true`, indicates that the purchased item was a pricing option
		for a service.

		barcode_id
		The BarcodeId of the item.  For services, BarcodeId may be null  If no
		barcode id is explicitly set by the business it is the internal id in
		a string format.
	"""

	input_map = {
		'Id': 'id',
		'IsService': 'is_service',
		'BarcodeId': 'barcode_id',
		}

	output_map = {
		'id': 'Id',
		'is_service': 'IsService',
		'barcode_id': 'BarcodeId',
		}

	id = None
	is_service = None
	barcode_id = None

