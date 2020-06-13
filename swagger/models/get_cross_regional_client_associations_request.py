from .base_model import BaseModel


class GetCrossRegionalClientAssociationsRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		Looks up the cross regional associations by the client’s ID. Either
		`ClientId` or `Email` must be provided. If both are provided, the
		`ClientId` is used by default.

		email
		Looks up the cross regional associations by the client’s email
		address. Either `ClientId` or `Email` must be provided. If both are
		provided, the `ClientId` is used by default.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'Email': 'email',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'email': 'Email',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	client_id = None
	email = None
	limit = None
	offset = None

