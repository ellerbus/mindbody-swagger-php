from .base_model import BaseModel


class GetClientReferralTypesResponse(BaseModel):
	"""
	no description available

	Attributes:

		referral_types
		The list of available referral types.
	"""

	input_map = {
		'ReferralTypes': 'referral_types',
		}

	output_map = {
		'referral_types': 'ReferralTypes',
		}

	referral_types = None

