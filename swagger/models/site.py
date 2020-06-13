from .base_model import BaseModel


class Site(BaseModel):
	"""
	no description available

	Attributes:

		accepts_american_express
		When `true`, indicates that this site accepts American Express
		cards.<br />  When `false`, indicates that this site does not accept
		American Express credit cards.

		accepts_discover
		When `true`, indicates that this site accepts Discover cards.<br />
		When `false`, indicates that this site does not accept Discover credit
		cards.

		accepts_master_card
		When `true`, indicates that this site accepts MasterCard cards.<br />
		When `false`, indicates that this site does not accept MasterCard
		credit cards.

		accepts_visa
		When `true`, indicates that this site accepts Visa cards.<br />  When
		`false`, indicates that this site does not accept Visa credit cards.

		allows_dashboard_access
		When `true`, indicates that this site allows access to its
		dashboard.<br />  When `false`, indicates that this site does not
		allow access to its dashboard.

		contact_email
		The site’s email address.

		description
		A description of the site.

		id
		The site ID.

		logo_url
		The URL to the site’s logo.

		name
		The name of the site.

		page_color_1
		A hex code for a color the business owner uses in marketing. This
		color can be used to set a theme for an integration so that it matches
		the configured color-scheme for the business.

		page_color_2
		The hex code for a second color, to be used in the same manner as
		`pageColor1`.

		page_color_3
		The hex code for a third color, to be used in the same manner as
		`pageColor1`.

		page_color_4
		The hex code for a fourth color, to be used in the same manner as
		`pageColor1`.

		pricing_level
		The MINDBODY pricing level for the business. Possible values are:
		Accelerate - The business is on MINDBODY’s Accelerate pricing tier.
		Grow - The business is on MINDBODY’s Essential pricing tier.  Legacy
		- The business is on an older MINDBODY pricing tier that is no longer
		offered.  Listing - The business is on an older MINDBODY pricing tier
		that is no longer offered.  Pro - The business is on an older MINDBODY
		pricing tier that is no longer offered.  Solo - The business is on an
		older MINDBODY pricing tier that is no longer offered.  Ultimate - The
		business is on MINDBODY’s Ultimate pricing tier.

		sms_package_enabled
		When `true`, indicates that the business uses SMS text messages to
		communicate with its clients.<br />  When `false`, indicates that the
		business does not use SMS text messages to communicate with its
		clients.

		tax_inclusive_prices
		When `true`, indicates that the total includes tax.<br />  When
		`false`, indicates that the total does not include tax.

		currency_iso_code
		The currency ISO code for the site.

		country_code
		The country code for the site.

		time_zone
		The time zone the site is located in.

		accepts_direct_debit
		When `true`, indicates that direct debit can be used by clients at
		this site.<br />  When `false`, indicates that direct debit can not by
		used by clients at this site.
	"""

	input_map = {
		'AcceptsAmericanExpress': 'accepts_american_express',
		'AcceptsDiscover': 'accepts_discover',
		'AcceptsMasterCard': 'accepts_master_card',
		'AcceptsVisa': 'accepts_visa',
		'AllowsDashboardAccess': 'allows_dashboard_access',
		'ContactEmail': 'contact_email',
		'Description': 'description',
		'Id': 'id',
		'LogoUrl': 'logo_url',
		'Name': 'name',
		'PageColor1': 'page_color_1',
		'PageColor2': 'page_color_2',
		'PageColor3': 'page_color_3',
		'PageColor4': 'page_color_4',
		'PricingLevel': 'pricing_level',
		'SmsPackageEnabled': 'sms_package_enabled',
		'TaxInclusivePrices': 'tax_inclusive_prices',
		'CurrencyIsoCode': 'currency_iso_code',
		'CountryCode': 'country_code',
		'TimeZone': 'time_zone',
		'AcceptsDirectDebit': 'accepts_direct_debit',
		}

	output_map = {
		'accepts_american_express': 'AcceptsAmericanExpress',
		'accepts_discover': 'AcceptsDiscover',
		'accepts_master_card': 'AcceptsMasterCard',
		'accepts_visa': 'AcceptsVisa',
		'allows_dashboard_access': 'AllowsDashboardAccess',
		'contact_email': 'ContactEmail',
		'description': 'Description',
		'id': 'Id',
		'logo_url': 'LogoUrl',
		'name': 'Name',
		'page_color_1': 'PageColor1',
		'page_color_2': 'PageColor2',
		'page_color_3': 'PageColor3',
		'page_color_4': 'PageColor4',
		'pricing_level': 'PricingLevel',
		'sms_package_enabled': 'SmsPackageEnabled',
		'tax_inclusive_prices': 'TaxInclusivePrices',
		'currency_iso_code': 'CurrencyIsoCode',
		'country_code': 'CountryCode',
		'time_zone': 'TimeZone',
		'accepts_direct_debit': 'AcceptsDirectDebit',
		}

	accepts_american_express = None
	accepts_discover = None
	accepts_master_card = None
	accepts_visa = None
	allows_dashboard_access = None
	contact_email = None
	description = None
	id = None
	logo_url = None
	name = None
	page_color_1 = None
	page_color_2 = None
	page_color_3 = None
	page_color_4 = None
	pricing_level = None
	sms_package_enabled = None
	tax_inclusive_prices = None
	currency_iso_code = None
	country_code = None
	time_zone = None
	accepts_direct_debit = None

