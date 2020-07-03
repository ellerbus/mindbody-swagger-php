<?php

namespace App\Mindbody\Models;

/**
 * A formula note.
 */
class FormulaNote extends BaseModel
{
	/**
	 * ID of the formula note.
	 * 
	 * @var integer format:int64
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
	 * @var string format:date-time
	 */
	public $entryDateTime;
	/**
	 * The appointment ID associated with the formula note.
	 * 
	 * @var integer format:int64
	 */
	public $appointmentId;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int64'],
			'ClientId' => ['clientId', 'string', null],
			'Note' => ['note', 'string', null],
			'EntryDateTime' => ['entryDateTime', 'string', 'date-time'],
			'AppointmentId' => ['appointmentId', 'integer', 'int64'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int64'],
			'clientId' => ['ClientId', 'string', null],
			'note' => ['Note', 'string', null],
			'entryDateTime' => ['EntryDateTime', 'string', 'date-time'],
			'appointmentId' => ['AppointmentId', 'integer', 'int64'],
			];
	}
}
