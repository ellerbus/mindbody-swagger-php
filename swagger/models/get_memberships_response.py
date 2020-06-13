from .base_model import BaseModel

from .membership import Membership

class GetMembershipsResponse(BaseModel):
	"""
	no description available

	Attributes:

		memberships
		Details about the memberships.
	"""

	input_map = {
		'Memberships': ['memberships', Membership],
		}

	output_map = {
		'memberships': 'Memberships',
		}

	memberships = None

