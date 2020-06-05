from .base_model import BaseModel


class ClientIndex(BaseModel):
	"""
	A client index.

	Attributes:

		id
		The unique ID of the client index.

		name
		The name of the client index.

		required_business_mode
		When `true`, indicates that the index is required when creating
		profiles in business mode.

		required_consumer_mode
		When `true`, indicates that the index is required when creating
		profiles in consumer mode.

		values
		Contains information about the index's possible values.

		action
		The action performed on this object.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'RequiredBusinessMode': 'required_business_mode',
		'RequiredConsumerMode': 'required_consumer_mode',
		'Values': 'values',
		'Action': 'action',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'required_business_mode': 'RequiredBusinessMode',
		'required_consumer_mode': 'RequiredConsumerMode',
		'values': 'Values',
		'action': 'Action',
		}