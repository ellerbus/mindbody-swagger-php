from .base_model import BaseModel

from .amenity import Amenity

class Location(BaseModel):
	"""
	no description available

	Attributes:

		additional_image_ur_ls
		A list of URLs of any images associated with this location.

		address
		The first line of the location’s street address.

		address_2
		A second address line for the location’s street address, if needed.

		amenities
		A list of strings representing amenities available at the location.

		business_description
		The business description for the location, as configured by the
		business owner.

		city
		The location’s city.

		description
		A description of the location.

		has_classes
		When `true`, indicates that classes are held at this location.<br />
		When `false`, Indicates that classes are not held at this location.

		id
		The ID assigned to this location.

		latitude
		The location’s latitude.

		longitude
		The location’s longitude.

		name
		The name of this location.

		phone
		The location’s phone number.

		phone_extension
		The location’s phone extension.

		postal_code
		The location’s postal code.

		site_id
		The ID number assigned to this location.

		state_prov_code
		The location’s state or province code.

		tax_1
		A decimal representation of the location’s first tax rate. Tax
		properties are provided to apply all taxes to the purchase price that
		the purchase is subject to. Use as many tax properties as needed to
		represent all the taxes that apply in the location. Enter a decimal
		number that represents the appropriate tax rate. For example, for an
		8% sales tax, enter 0.08.

		tax_2
		A decimal representation of the location’s second tax rate. See the
		example in the description of Tax1.

		tax_3
		A decimal representation of the location’s third tax rate. See the
		example in the description of Tax1.

		tax_4
		A decimal representation of the location’s fourth tax rate. See the
		example in the description of Tax1.

		tax_5
		A decimal representation of the location’s fifth tax rate. See the
		example in the description of Tax1.

		total_number_of_ratings
		The number of reviews that clients have left for this location.

		average_rating
		The average rating for the location, out of five stars.

		total_number_of_deals
		The number of distinct introductory pricing options available for
		purchase at this location.
	"""

	input_map = {
		'AdditionalImageURLs': 'additional_image_ur_ls',
		'Address': 'address',
		'Address2': 'address_2',
		'Amenities': ['amenities', Amenity],
		'BusinessDescription': 'business_description',
		'City': 'city',
		'Description': 'description',
		'HasClasses': 'has_classes',
		'Id': 'id',
		'Latitude': 'latitude',
		'Longitude': 'longitude',
		'Name': 'name',
		'Phone': 'phone',
		'PhoneExtension': 'phone_extension',
		'PostalCode': 'postal_code',
		'SiteID': 'site_id',
		'StateProvCode': 'state_prov_code',
		'Tax1': 'tax_1',
		'Tax2': 'tax_2',
		'Tax3': 'tax_3',
		'Tax4': 'tax_4',
		'Tax5': 'tax_5',
		'TotalNumberOfRatings': 'total_number_of_ratings',
		'AverageRating': 'average_rating',
		'TotalNumberOfDeals': 'total_number_of_deals',
		}

	output_map = {
		'additional_image_ur_ls': 'AdditionalImageURLs',
		'address': 'Address',
		'address_2': 'Address2',
		'amenities': 'Amenities',
		'business_description': 'BusinessDescription',
		'city': 'City',
		'description': 'Description',
		'has_classes': 'HasClasses',
		'id': 'Id',
		'latitude': 'Latitude',
		'longitude': 'Longitude',
		'name': 'Name',
		'phone': 'Phone',
		'phone_extension': 'PhoneExtension',
		'postal_code': 'PostalCode',
		'site_id': 'SiteID',
		'state_prov_code': 'StateProvCode',
		'tax_1': 'Tax1',
		'tax_2': 'Tax2',
		'tax_3': 'Tax3',
		'tax_4': 'Tax4',
		'tax_5': 'Tax5',
		'total_number_of_ratings': 'TotalNumberOfRatings',
		'average_rating': 'AverageRating',
		'total_number_of_deals': 'TotalNumberOfDeals',
		}

	additional_image_ur_ls = None
	address = None
	address_2 = None
	amenities = None
	business_description = None
	city = None
	description = None
	has_classes = None
	id = None
	latitude = None
	longitude = None
	name = None
	phone = None
	phone_extension = None
	postal_code = None
	site_id = None
	state_prov_code = None
	tax_1 = None
	tax_2 = None
	tax_3 = None
	tax_4 = None
	tax_5 = None
	total_number_of_ratings = None
	average_rating = None
	total_number_of_deals = None

