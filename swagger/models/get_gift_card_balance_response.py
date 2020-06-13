from .base_model import BaseModel


class GetGiftCardBalanceResponse(BaseModel):
	"""
	no description available

	Attributes:

		barcode_id
		The gift card's barcode ID.

		remaining_balance
		The gift card's remaining balance.
	"""

	input_map = {
		'BarcodeId': 'barcode_id',
		'RemainingBalance': 'remaining_balance',
		}

	output_map = {
		'barcode_id': 'BarcodeId',
		'remaining_balance': 'RemainingBalance',
		}

	barcode_id = None
	remaining_balance = None

