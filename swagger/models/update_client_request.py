from .base_model import BaseModel

from .client import Client

class UpdateClientRequest(BaseModel):
	"""
	no description available

	Attributes:

		client
		Contains information about the client to be updated. The client ID is
		used to look up the existing client to update and any specified values
		are updated.

		test
		When `true`, indicates that test mode is enabled. The method is
		validated, but no client data is added or updated.<br />  Default:
		**false**

		cross_regional_update
		When `true`, the updated information is propagated to all of the
		region’s sites where the client has a profile.<br />  When `false`,
		only the local client is updated.<br />  Default: **true**

		new_id
		The new RSSID to be used for the client. Use `NewId` to assign a
		specific number to be a client’s ID. If that number is not
		available, the call returns an error. This RSSID must be unique within
		the subscriber’s site. If this is a cross-regional update, the RSSID
		must be unique across the region. If the requested number is already
		in use, an error is returned.
	"""

	input_map = {
		'Client': ('client', Client),
		'Test': 'test',
		'CrossRegionalUpdate': 'cross_regional_update',
		'NewId': 'new_id',
		}

	output_map = {
		'client': 'Client',
		'test': 'Test',
		'cross_regional_update': 'CrossRegionalUpdate',
		'new_id': 'NewId',
		}

	def __init__(self, client):
		self.client = client
