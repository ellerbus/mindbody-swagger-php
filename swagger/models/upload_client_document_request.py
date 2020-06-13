from .base_model import BaseModel

from .client_document import ClientDocument

class UploadClientDocumentRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The RSSID of the client for whom the document is to be uploaded.

		file
		Contains information about the file to be uploaded.
	"""

	input_map = {
		'ClientId': 'client_id',
		'File': ('file', ClientDocument),
		}

	output_map = {
		'client_id': 'ClientId',
		'file': 'File',
		}

	client_id = None
	file = None



	def __init__(self, client_id, file):
		self.client_id = client_id
		self.file = file
