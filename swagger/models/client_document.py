from .base_model import BaseModel


class ClientDocument(BaseModel):
	"""
	no description available

	Attributes:

		file_name
		The name of the file to be used on the client’s documents page when
		it is uploaded.

		media_type
		The type of file or file extension. Possible values are:  * pdf  * jpg
		* jpeg  * tif  * tiff  * png  * doc  * docx  * bmp  * txt  * rtf  *
		xlsx  * xls  * gif  * zip  * ppt  * pptx  * mov

		buffer
		A Base64-encoded string representation of the file’s byte array.
	"""

	input_map = {
		'FileName': 'file_name',
		'MediaType': 'media_type',
		'Buffer': 'buffer',
		}

	output_map = {
		'file_name': 'FileName',
		'media_type': 'MediaType',
		'buffer': 'Buffer',
		}

	def __init__(self, file_name, media_type, buffer):
		self.file_name = file_name
		self.media_type = media_type
		self.buffer = buffer
