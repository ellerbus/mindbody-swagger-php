<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientFormulaNotesRequest extends BaseModel
{
	/**
	 * The client ID of the client whose formula notes are being requested.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The appointment ID of the appointment that the formula notes are
	 * related to.
	 * 
	 * @var integer format:int64
	 */
	public $appointmentId;
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
			'ClientId' => ['clientId', 'string', null],
			'AppointmentId' => ['appointmentId', 'integer', 'int64'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'appointmentId' => ['AppointmentId', 'integer', 'int64'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
