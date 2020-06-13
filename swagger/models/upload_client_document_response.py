from .base_model import BaseModel


class UploadClientDocumentResponse(BaseModel):
	"""
	no description available

	Attributes:

		file_size
		The size of the uploaded file.

		file_name
		The name of the uploaded file.
	"""

	input_map = {
		'FileSize': 'file_size',
		'FileName': 'file_name',
		}

	output_map = {
		'file_size': 'FileSize',
		'file_name': 'FileName',
		}

	file_size = None
	file_name = None

