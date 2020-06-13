from .base_model import BaseModel


class UploadClientPhotoRequest(BaseModel):
	"""
	no description available

	Attributes:

		bytes
		A Base64-encoded string representation of the image’s byte array.

		client_id
		The RSSID of the client for whom the photo is to be uploaded.
	"""

	input_map = {
		'Bytes': 'bytes',
		'ClientId': 'client_id',
		}

	output_map = {
		'bytes': 'Bytes',
		'client_id': 'ClientId',
		}

	bytes = None
	client_id = None



	def __init__(self, bytes, client_id):
		self.bytes = bytes
		self.client_id = client_id
