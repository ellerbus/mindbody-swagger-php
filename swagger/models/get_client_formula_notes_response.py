from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetClientFormulaNotesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		formula_notes
		Contains details about the client’s formula.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse)
		'FormulaNotes': 'formula_notes',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'formula_notes': 'FormulaNotes',
		}