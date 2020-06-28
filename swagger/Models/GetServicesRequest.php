<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetServicesRequest extends BaseModel
{
	/**
	 * Filters to pricing options with the specified program IDs.
	 * 
	 * @var integer[]
	 */
	public $programIds;
	/**
	 * Filters to the pricing options with the specified session types IDs.
	 * 
	 * @var integer[]
	 */
	public $sessionTypeIds;
	/**
	 * Filters to the pricing options with the specified IDs. In this
	 * context, service and pricing option are used interchangeably.
	 * 
	 * @var string[]
	 */
	public $serviceIds;
	/**
	 * Filters to the pricing options for the specified class ID.
	 * 
	 * @var integer
	 */
	public $classId;
	/**
	 * Filters to the pricing options for the specified class schedule ID.
	 * 
	 * @var integer
	 */
	public $classScheduleId;
	/**
	 * When `true`, filters to the pricing options that can be sold
	 * online.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $sellOnline;
	/**
	 * When specified, for each returned pricing option, `TaxRate` and
	 * `TaxIncluded` are calculated according to the specified location. Note
	 * that this does not filter results to only services provided at the
	 * given location, and for locations where Value-Added Tax (VAT) rules
	 * apply, the `TaxRate` is set to zero.
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * When `true`, indicates that pricing options of related programs are
	 * omitted from the response.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $hideRelatedPrograms;
	/**
	 * Sets `Price` and `OnlinePrice` to the particular pricing of a specific
	 * staff member, if allowed by the business.
	 * 
	 * @var integer
	 */
	public $staffId;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'ProgramIds' => 'programIds',
			'SessionTypeIds' => 'sessionTypeIds',
			'ServiceIds' => 'serviceIds',
			'ClassId' => 'classId',
			'ClassScheduleId' => 'classScheduleId',
			'SellOnline' => 'sellOnline',
			'LocationId' => 'locationId',
			'HideRelatedPrograms' => 'hideRelatedPrograms',
			'StaffId' => 'staffId',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'programIds' => 'ProgramIds',
			'sessionTypeIds' => 'SessionTypeIds',
			'serviceIds' => 'ServiceIds',
			'classId' => 'ClassId',
			'classScheduleId' => 'ClassScheduleId',
			'sellOnline' => 'SellOnline',
			'locationId' => 'LocationId',
			'hideRelatedPrograms' => 'HideRelatedPrograms',
			'staffId' => 'StaffId',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
