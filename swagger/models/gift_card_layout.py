from .base_model import BaseModel


class GiftCardLayout(BaseModel):
	"""
	Gift card layout

	Attributes:

		layout_id
		The ID of the layout.

		layout_name
		The name of the layout.
	"""

	input_map = {
		'LayoutId': 'layout_id',
		'LayoutName': 'layout_name',
		}

	output_map = {
		'layout_id': 'LayoutId',
		'layout_name': 'LayoutName',
		}

	layout_id = None
	layout_name = None

