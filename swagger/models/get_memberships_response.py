from .base_model import BaseModel


class GetMembershipsResponse(BaseModel):
	"""
	no description available

	Attributes:

		memberships
		Details about the memberships.
	"""

	input_map = {
		'Memberships': 'memberships',
		}

	output_map = {
		'memberships': 'Memberships',
		}

	memberships = None

