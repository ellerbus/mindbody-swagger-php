from .base_model import BaseModel


class ClientContract(BaseModel):
	"""
	A client contract

	Attributes:

		agreement_date
		The date on which the contract was signed.

		autopay_status
		The status of the client’s autopay.

		contract_name
		The name of the contract.

		end_date
		The date that the contract expires.

		id
		The unique ID of the contract.

		origination_location_id
		The ID of the location where the contract was issued.

		start_date
		The date that the contract became active.

		site_id
		The ID of the site where the contract was issued.

		upcoming_autopay_events
		Contains details of the autopay events.
	"""

	input_map = {
		'AgreementDate': 'agreement_date',
		'AutopayStatus': 'autopay_status',
		'ContractName': 'contract_name',
		'EndDate': 'end_date',
		'Id': 'id',
		'OriginationLocationId': 'origination_location_id',
		'StartDate': 'start_date',
		'SiteId': 'site_id',
		'UpcomingAutopayEvents': 'upcoming_autopay_events',
		}

	output_map = {
		'agreement_date': 'AgreementDate',
		'autopay_status': 'AutopayStatus',
		'contract_name': 'ContractName',
		'end_date': 'EndDate',
		'id': 'Id',
		'origination_location_id': 'OriginationLocationId',
		'start_date': 'StartDate',
		'site_id': 'SiteId',
		'upcoming_autopay_events': 'UpcomingAutopayEvents',
		}