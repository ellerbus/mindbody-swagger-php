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
	 * @var integer
	 */
	public $appointmentId;
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
			'ClientId' => 'clientId',
			'AppointmentId' => 'appointmentId',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => 'ClientId',
			'appointmentId' => 'AppointmentId',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
