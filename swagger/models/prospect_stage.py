from .base_model import BaseModel


class ProspectStage(BaseModel):
	"""
	no description available

	Attributes:

		active
		When `true`, indicates that the client is a prospect at the business
		and has not yet purchased any of the business pricing options.  When
		`false`, indicates that the client has already purchased at least one
		pricing option from the business.

		description
		A description of the prospect stage.

		id
		The ID of the prospect stage assigned to the client.
	"""

	input_map = {
		'Active': 'active',
		'Description': 'description',
		'Id': 'id',
		}

	output_map = {
		'active': 'Active',
		'description': 'Description',
		'id': 'Id',
		}