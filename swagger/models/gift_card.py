from .base_model import BaseModel


class GiftCard(BaseModel):
	"""
	no description available

	Attributes:

		id
		The gift card's `ProductID`.

		location_ids
		The IDs of the locations where the gift card is sold.

		description
		A description of the gift card.

		editable_by_consumer
		When `true`, indicates that the gift card can be edited by the client.

		card_value
		The value of the gift card.

		sale_price
		The sale price of the gift card, if applicable.

		sold_online
		When `true`, indicates that the gift card is sold online.

		membership_restriction_ids
		A list of IDs for membership restrictions, if this card is restricted
		to members with certain types of memberships.

		gift_card_terms
		The terms of the gift card.

		contact_info
		Contact information for the gift card.

		display_logo
		When `true`, indicates that the logo should be displayed on the gift
		card.

		layouts
		A list of layouts available for the gift card.
	"""

	input_map = {
		'Id': 'id',
		'LocationIds': 'location_ids',
		'Description': 'description',
		'EditableByConsumer': 'editable_by_consumer',
		'CardValue': 'card_value',
		'SalePrice': 'sale_price',
		'SoldOnline': 'sold_online',
		'MembershipRestrictionIds': 'membership_restriction_ids',
		'GiftCardTerms': 'gift_card_terms',
		'ContactInfo': 'contact_info',
		'DisplayLogo': 'display_logo',
		'Layouts': 'layouts',
		}

	output_map = {
		'id': 'Id',
		'location_ids': 'LocationIds',
		'description': 'Description',
		'editable_by_consumer': 'EditableByConsumer',
		'card_value': 'CardValue',
		'sale_price': 'SalePrice',
		'sold_online': 'SoldOnline',
		'membership_restriction_ids': 'MembershipRestrictionIds',
		'gift_card_terms': 'GiftCardTerms',
		'contact_info': 'ContactInfo',
		'display_logo': 'DisplayLogo',
		'layouts': 'Layouts',
		}