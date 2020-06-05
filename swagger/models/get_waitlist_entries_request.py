from .base_model import BaseModel


class GetWaitlistEntriesRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_ids
		The requested class IDs. If a class ID is present, the request
		automatically disregards any class schedule IDs in the request. <br />
		Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or
		`ClassIds` is required; the others become optional.<br />  Default:
		**all ClassIds**

		class_schedule_ids
		The requested class schedule IDs. If a class ID is present, the
		request automatically disregards any class schedule IDs in the
		request.<br />  Either `ClassScheduleIds`, `ClientIds`,
		`WaitlistEntryIds`, or `ClassIds` is required; the others become
		optional.<br />  Default: **all ClassScheduleIds**

		client_ids
		The requested client IDs.<br />  Either `ClassScheduleIds`,
		`ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others
		become optional.<br />  Default: **all ClientIds**

		hide_past_entries
		When `true`, indicates that past waiting list entries are hidden from
		clients.<br />  When `false`, indicates that past entries are not
		hidden from clients.<br />  Default: **false**

		waitlist_entry_ids
		The requested waiting list entry IDs.<br />  Either
		`ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is
		required; the others become optional.<br />  Default: **all
		WaitlistEntryIds**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClassIds': 'class_ids',
		'ClassScheduleIds': 'class_schedule_ids',
		'ClientIds': 'client_ids',
		'HidePastEntries': 'hide_past_entries',
		'WaitlistEntryIds': 'waitlist_entry_ids',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'class_ids': 'ClassIds',
		'class_schedule_ids': 'ClassScheduleIds',
		'client_ids': 'ClientIds',
		'hide_past_entries': 'HidePastEntries',
		'waitlist_entry_ids': 'WaitlistEntryIds',
		'limit': 'Limit',
		'offset': 'Offset',
		}