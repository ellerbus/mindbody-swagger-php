from .base_model import BaseModel


class SalesRep(BaseModel):
	"""
	no description available

	Attributes:

		first_name
		The first name of the sales representative.

		id
		The staff ID of the sales representative.

		last_name
		The last name of the sales representative.

		sales_rep_number
		This value is the number that identifies the type of sales
		representative assigned to this client. One to six types of sales
		representatives can be assigned to a client at any given time,
		depending on site settings.

		sales_rep_numbers
		A list of the different types of sales representative functions
		assigned to this staff member.
	"""

	input_map = {
		'FirstName': 'first_name',
		'Id': 'id',
		'LastName': 'last_name',
		'SalesRepNumber': 'sales_rep_number',
		'SalesRepNumbers': 'sales_rep_numbers',
		}

	output_map = {
		'first_name': 'FirstName',
		'id': 'Id',
		'last_name': 'LastName',
		'sales_rep_number': 'SalesRepNumber',
		'sales_rep_numbers': 'SalesRepNumbers',
		}