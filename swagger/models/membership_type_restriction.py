from .base_model import BaseModel


class MembershipTypeRestriction(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the membership that is allowed to purchase the contract.

		name
		The name of the membership type.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		}