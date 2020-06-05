from .base_model import BaseModel


class RemoveFromWaitlistRequest(BaseModel):
	"""
	no description available

	Attributes:

		waitlist_entry_ids
		A list of waiting list IDs to remove from waiting lists.
	"""

	input_map = {
		'WaitlistEntryIds': 'waitlist_entry_ids',
		}

	output_map = {
		'waitlist_entry_ids': 'WaitlistEntryIds',
		}	def __init__(self, waitlist_entry_ids):
		self.waitlist_entry_ids = waitlist_entry_ids
