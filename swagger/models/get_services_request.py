from .base_model import BaseModel


class GetServicesRequest(BaseModel):
	"""
	no description available

	Attributes:

		program_ids
		Filters to pricing options with the specified program IDs.

		session_type_ids
		Filters to the pricing options with the specified session types IDs.

		service_ids
		Filters to the pricing options with the specified IDs. In this
		context, service and pricing option are used interchangeably.

		class_id
		Filters to the pricing options for the specified class ID.

		class_schedule_id
		Filters to the pricing options for the specified class schedule ID.

		sell_online
		When `true`, filters to the pricing options that can be sold
		online.<br />  Default: **false**

		location_id
		When specified, for each returned pricing option, `TaxRate` and
		`TaxIncluded` are calculated according to the specified location. Note
		that this does not filter results to only services provided at the
		given location, and for locations where Value-Added Tax (VAT) rules
		apply, the `TaxRate` is set to zero.

		hide_related_programs
		When `true`, indicates that pricing options of related programs are
		omitted from the response.<br />  Default: **false**

		staff_id
		Sets `Price` and `OnlinePrice` to the particular pricing of a specific
		staff member, if allowed by the business.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ProgramIds': 'program_ids',
		'SessionTypeIds': 'session_type_ids',
		'ServiceIds': 'service_ids',
		'ClassId': 'class_id',
		'ClassScheduleId': 'class_schedule_id',
		'SellOnline': 'sell_online',
		'LocationId': 'location_id',
		'HideRelatedPrograms': 'hide_related_programs',
		'StaffId': 'staff_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'program_ids': 'ProgramIds',
		'session_type_ids': 'SessionTypeIds',
		'service_ids': 'ServiceIds',
		'class_id': 'ClassId',
		'class_schedule_id': 'ClassScheduleId',
		'sell_online': 'SellOnline',
		'location_id': 'LocationId',
		'hide_related_programs': 'HideRelatedPrograms',
		'staff_id': 'StaffId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	program_ids = None
	session_type_ids = None
	service_ids = None
	class_id = None
	class_schedule_id = None
	sell_online = None
	location_id = None
	hide_related_programs = None
	staff_id = None
	limit = None
	offset = None

