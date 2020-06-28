<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class SubstituteClassTeacherRequest extends BaseModel
{
	/**
	 * The ID of the class to which a substitute teacher needs to be
	 * assigned.
	 * 
	 * @var integer format:int32
	 */
	public $classId;
	/**
	 * The staff ID of the teacher to substitute.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * When `true`, overrides any conflicts in the schedule.
	 * 
	 * @var boolean 
	 */
	public $overrideConflicts;
	/**
	 * When `true`, sends the client an automatic email about the
	 * substitution, if the client has opted to receive email.
	 * 
	 * @var boolean 
	 */
	public $sendClientEmail;
	/**
	 * When `true`, sends the originally scheduled teacher an automatic email
	 * about the substitution.
	 * 
	 * @var boolean 
	 */
	public $sendOriginalTeacherEmail;
	/**
	 * When `true`, sends the substituted teacher an automatic email about
	 * the substitution.
	 * 
	 * @var boolean 
	 */
	public $sendSubstituteTeacherEmail;
	/**
	 * Constructor
	 */
	public function __construct($classId, $staffId)
	{
		$this->classId = $classId;
		$this->staffId = $staffId;
	}

	protected function getInputMap()
	{
		return [
			'ClassId' => ['classId', 'integer', 'int32'],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'OverrideConflicts' => ['overrideConflicts', 'boolean', null],
			'SendClientEmail' => ['sendClientEmail', 'boolean', null],
			'SendOriginalTeacherEmail' => ['sendOriginalTeacherEmail', 'boolean', null],
			'SendSubstituteTeacherEmail' => ['sendSubstituteTeacherEmail', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classId' => ['ClassId', 'integer', 'int32'],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'overrideConflicts' => ['OverrideConflicts', 'boolean', null],
			'sendClientEmail' => ['SendClientEmail', 'boolean', null],
			'sendOriginalTeacherEmail' => ['SendOriginalTeacherEmail', 'boolean', null],
			'sendSubstituteTeacherEmail' => ['SendSubstituteTeacherEmail', 'boolean', null],
			];
	}
}
