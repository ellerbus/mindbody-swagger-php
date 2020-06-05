from .base_model import BaseModel


class Relationship(BaseModel):
	"""
	Jim is a RelationshipName1 of John. John is a RelationshipName2 of
	Jim.

	Attributes:

		id
		The ID of the relationship.

		relationship_name_1
		The name of the first relationship.

		relationship_name_2
		The name of the second relationship.
	"""

	input_map = {
		'Id': 'id',
		'RelationshipName1': 'relationship_name_1',
		'RelationshipName2': 'relationship_name_2',
		}

	output_map = {
		'id': 'Id',
		'relationship_name_1': 'RelationshipName1',
		'relationship_name_2': 'RelationshipName2',
		}