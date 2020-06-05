from .base_model import BaseModel


class SessionType(BaseModel):
	"""
	no description available

	Attributes:

		type
		Contains the class description session type.

		default_time_length
		The default amount of time that a session of this type typically
		lasts.

		id
		This session type’s unique ID.

		name
		The name of this session type.

		num_deducted
		The number of sessions that this session type deducts from the pricing
		option used to pay for this type of session.

		program_id
		This session type’s service category ID.

		category
		This session type’s category.

		category_id
		This session type’s category ID.

		subcategory
		This session type’s subcategory.

		subcategory_id
		This session type’s subcategory ID.
	"""

	input_map = {
		'Type': 'type',
		'DefaultTimeLength': 'default_time_length',
		'Id': 'id',
		'Name': 'name',
		'NumDeducted': 'num_deducted',
		'ProgramId': 'program_id',
		'Category': 'category',
		'CategoryId': 'category_id',
		'Subcategory': 'subcategory',
		'SubcategoryId': 'subcategory_id',
		}

	output_map = {
		'type': 'Type',
		'default_time_length': 'DefaultTimeLength',
		'id': 'Id',
		'name': 'Name',
		'num_deducted': 'NumDeducted',
		'program_id': 'ProgramId',
		'category': 'Category',
		'category_id': 'CategoryId',
		'subcategory': 'Subcategory',
		'subcategory_id': 'SubcategoryId',
		}