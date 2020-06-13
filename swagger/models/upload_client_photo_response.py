from .base_model import BaseModel


class UploadClientPhotoResponse(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The RSSID of the client for whom the photo was uploaded.

		photo_url
		The URL of the uploaded photo.
	"""

	input_map = {
		'ClientId': 'client_id',
		'PhotoUrl': 'photo_url',
		}

	output_map = {
		'client_id': 'ClientId',
		'photo_url': 'PhotoUrl',
		}

	client_id = None
	photo_url = None

