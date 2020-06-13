from .base_model import BaseModel

from .checkout_item import CheckoutItem

class CheckoutItemWrapper(BaseModel):
	"""
	no description available

	Attributes:

		item
		Information about an item in the cart.

		discount_amount
		The amount the item is discounted. This parameter is ignored for
		packages.

		appointment_booking_requests
		A list of appointments to be booked then paid for by this item. This
		parameter applies only to pricing option items.

		enrollment_ids
		A list of enrollment IDs that this item is to pay for. This parameter
		applies only to pricing option items.

		class_ids
		A list of class IDs that this item is to pay for. This parameter
		applies only to pricing option items.

		course_ids
		A list of course IDs that this item is to pay for. This parameter
		applies only to pricing option items.

		visit_ids
		A list of visit IDs that this item is to pay for. This parameter
		applies only to pricing option items.

		appointment_ids
		A list of appointment IDs that this item is to reconcile.

		id
		The item’s unique ID within the cart.

		quantity
		The number of this item to be purchased.
	"""

	input_map = {
		'Item': ('item', Item),
		'DiscountAmount': 'discount_amount',
		'AppointmentBookingRequests': 'appointment_booking_requests',
		'EnrollmentIds': 'enrollment_ids',
		'ClassIds': 'class_ids',
		'CourseIds': 'course_ids',
		'VisitIds': 'visit_ids',
		'AppointmentIds': 'appointment_ids',
		'Id': 'id',
		'Quantity': 'quantity',
		}

	output_map = {
		'item': 'Item',
		'discount_amount': 'DiscountAmount',
		'appointment_booking_requests': 'AppointmentBookingRequests',
		'enrollment_ids': 'EnrollmentIds',
		'class_ids': 'ClassIds',
		'course_ids': 'CourseIds',
		'visit_ids': 'VisitIds',
		'appointment_ids': 'AppointmentIds',
		'id': 'Id',
		'quantity': 'Quantity',
		}

		'Item': ('item', Item),
	discount_amount = None
	appointment_booking_requests = None
	enrollment_ids = None
	class_ids = None
	course_ids = None
	visit_ids = None
	appointment_ids = None
	id = None
	quantity = None

