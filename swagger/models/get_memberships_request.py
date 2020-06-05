from .base_model import BaseModel


class GetMembershipsRequest(BaseModel):
	"""
	no description available

	Attributes:

		membership_ids
		Filters results to memberships that belong to one of the given
		membership IDs. If omitted, all memberships are returned.
	"""

	input_map = {
		'MembershipIds': 'membership_ids',
		}

	output_map = {
		'membership_ids': 'MembershipIds',
		}