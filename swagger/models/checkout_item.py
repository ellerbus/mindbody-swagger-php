from .base_model import BaseModel


class CheckoutItem(BaseModel):
	"""
	no description available

	Attributes:

		type
		The type of item. Possible values are:  * Service - Indicates that
		this item is a pricing option.  * Product - Indicates that this item
		is a retail product.  * Package - Indicates that this item is a
		package.  * Tip - Indicates that this item is a tip.

		metadata
		Contains information about the item to be purchased. See [Cart Item Me
		tadata](https://developers.mindbodyonline.com/PublicDocumentation/V6#c
		art-item-metadata) for more information.
	"""

	input_map = {
		'Type': 'type',
		'Metadata': 'metadata',
		}

	output_map = {
		'type': 'Type',
		'metadata': 'Metadata',
		}

	type = None
	metadata = None

