from .base_model import BaseModel


class GetActivationCodeResponse(BaseModel):
	"""
	no description available

	Attributes:

		activation_code
		An activation code used to provide access to a site’s business data
		through MINDBODY.

		activation_link
		A link to the Manage Credentials screen.
	"""

	input_map = {
		'ActivationCode': 'activation_code',
		'ActivationLink': 'activation_link',
		}

	output_map = {
		'activation_code': 'ActivationCode',
		'activation_link': 'ActivationLink',
		}