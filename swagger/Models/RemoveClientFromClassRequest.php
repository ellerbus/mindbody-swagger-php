<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class RemoveClientFromClassRequest extends BaseModel
{
	/**
	 * The RSSID of the client to remove from the specified class.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The ID of the class that you want to remove the client from.
	 * 
	 * @var integer format:int32
	 */
	public $classId;
	/**
	 * When `true`, the request ensures that its parameters are valid without
	 * affecting real data.<br />  When `false`, the request performs as
	 * intended and may affect live client data.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * When `true`, indicates that the client should be sent an email.
	 * Depending on the site and client settings, an email may or may not be
	 * sent.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $sendEmail;
	/**
	 * When `true`, indicates that the client is to be late cancelled from
	 * the class.<br />  When `false`, indicates that the client is to be
	 * early cancelled from the class.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $lateCancel;
	/**
	 * Constructor
	 */
	public function __construct($clientId, $classId)
	{
		$this->clientId = $clientId;
		$this->classId = $classId;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'ClassId' => ['classId', 'integer', 'int32'],
			'Test' => ['test', 'boolean', null],
			'SendEmail' => ['sendEmail', 'boolean', null],
			'LateCancel' => ['lateCancel', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'classId' => ['ClassId', 'integer', 'int32'],
			'test' => ['Test', 'boolean', null],
			'sendEmail' => ['SendEmail', 'boolean', null],
			'lateCancel' => ['LateCancel', 'boolean', null],
			];
	}
}
