<?php

namespace App\Mindbody\Models;

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
	 * @var integer format:int32
	 */
	public $classId;
	/**
	 * Filters to the pricing options for the specified class schedule ID.
	 * 
	 * @var integer format:int32
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
	 * @var integer format:int32
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
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'ProgramIds' => ['programIds', 'array', null],
			'SessionTypeIds' => ['sessionTypeIds', 'array', null],
			'ServiceIds' => ['serviceIds', 'array', null],
			'ClassId' => ['classId', 'integer', 'int32'],
			'ClassScheduleId' => ['classScheduleId', 'integer', 'int32'],
			'SellOnline' => ['sellOnline', 'boolean', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'HideRelatedPrograms' => ['hideRelatedPrograms', 'boolean', null],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'programIds' => ['ProgramIds', 'array', null],
			'sessionTypeIds' => ['SessionTypeIds', 'array', null],
			'serviceIds' => ['ServiceIds', 'array', null],
			'classId' => ['ClassId', 'integer', 'int32'],
			'classScheduleId' => ['ClassScheduleId', 'integer', 'int32'],
			'sellOnline' => ['SellOnline', 'boolean', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'hideRelatedPrograms' => ['HideRelatedPrograms', 'boolean', null],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
