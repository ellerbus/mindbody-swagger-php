<?php

namespace App\MindBody\Models;

/**
 * A formula note.
 */
class FormulaNote extends BaseModel
{
	/**
	 * ID of the formula note.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * Client ID of the formula note.
	 * 
	 * @var string
	 */
	public $clientId;
	/**
	 * The text of the formula note.
	 * 
	 * @var string
	 */
	public $note;
	/**
	 * Date and time that the formula note was entered.
	 * 
	 * @var string
	 */
	public $entryDateTime;
	/**
	 * The appointment ID associated with the formula note.
	 * 
	 * @var integer
	 */
	public $appointmentId;

	protected function getInputMap()
	{
		return [
			'Id' => 'id',
			'ClientId' => 'clientId',
			'Note' => 'note',
			'EntryDateTime' => 'entryDateTime',
			'AppointmentId' => 'appointmentId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'clientId' => 'ClientId',
			'note' => 'Note',
			'entryDateTime' => 'EntryDateTime',
			'appointmentId' => 'AppointmentId',
			];
	}
}
