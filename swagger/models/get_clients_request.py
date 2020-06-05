from .base_model import BaseModel


class GetClientsRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_i_ds
		The requested client IDs.  Default: **all IDs** that the authenticated
		user’s access level allows.

		search_text
		Text to use in the search. Can include FirstName, LastName, and Email.
		Note that user credentials must be provided.

		is_prospect
		When `true`, filters the results to include only those clients marked
		as prospects for the business.<br />  When `false`, indicates that
		only those clients who are not marked prospects should be returned.

		last_modified_date
		Filters the results to include only the clients that have been
		modified on or after this date.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientIDs': 'client_i_ds',
		'SearchText': 'search_text',
		'IsProspect': 'is_prospect',
		'LastModifiedDate': 'last_modified_date',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_i_ds': 'ClientIDs',
		'search_text': 'SearchText',
		'is_prospect': 'IsProspect',
		'last_modified_date': 'LastModifiedDate',
		'limit': 'Limit',
		'offset': 'Offset',
		}