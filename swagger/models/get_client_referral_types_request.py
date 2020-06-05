from .base_model import BaseModel


class GetClientReferralTypesRequest(BaseModel):
	"""
	no description available

	Attributes:

		include_inactive
		When `true`, filters the results to include subtypes and inactive
		referral types.<br />  When `false`, includes no subtypes and only
		active types.
	"""

	input_map = {
		'IncludeInactive': 'include_inactive',
		}

	output_map = {
		'include_inactive': 'IncludeInactive',
		}