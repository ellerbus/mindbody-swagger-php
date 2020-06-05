from .base_model import BaseModel


class CheckoutPaymentInfo(BaseModel):
	"""
	no description available

	Attributes:

		type
		The type of payment. Possible values are:  * CreditCard - Indicates
		that this payment item is a credit card.  * StoredCard - Indicates
		that this payment item is a credit card stored on the client’s
		account.  * EncryptedTrackData - Indicates that this payment item is a
		swiped credit card.  * TrackData - Indicates that this payment item is
		a swiped credit card.  * DebitAccount - Indicates that funds should be
		debited from the client’s account.  * Custom - Indicates that this
		payment item is a custom payment method configured by the business.  *
		Comp - Indicates that this payment item is making all or part of the
		cart’s total complementary.  * Cash - Indicates that this payment
		item is cash.  * Check - Indicates that this payment item is a check.
		* GiftCard - Indicates that this payment item is a gift card.

		metadata
		Contains information about the cart’s payments. See [Payment Item Me
		tadata](https://developers.mindbodyonline.com/PublicDocumentation/V6#p
		ayment-item-metadata) for more information.
	"""

	input_map = {
		'Type': 'type',
		'Metadata': 'metadata',
		}

	output_map = {
		'type': 'Type',
		'metadata': 'Metadata',
		}