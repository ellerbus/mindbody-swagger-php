from .base_model import BaseModel


class StoredCardInfo(BaseModel):
	"""
	no description available

	Attributes:
	"""

	input_map = {
		'LastFour': 'last_four',
		}

	output_map = {
		'last_four': 'LastFour',
		}