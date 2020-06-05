from .base_model import BaseModel

from .relationship import Relationship

class ClientRelationship(BaseModel):
	"""
	A relation between two clients.

	Attributes:

		related_client_id
		The RSSID of the related client.

		relationship
		Contains details about the relationship between two clients.

		relationship_name
		The name of the relationship of the related client.

		delete
		When true, this relationship is removed from the associated clients.
	"""

	input_map = {
		'RelatedClientId': 'related_client_id',
		'Relationship': ('relationship', Relationship)
		'RelationshipName': 'relationship_name',
		'Delete': 'delete',
		}

	output_map = {
		'related_client_id': 'RelatedClientId',
		'relationship': 'Relationship',
		'relationship_name': 'RelationshipName',
		'delete': 'Delete',
		}