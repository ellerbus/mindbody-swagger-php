<?php

namespace App\MindBody\Models;

/**
 * Request to send a password reset email to a user
 */
class SendPasswordResetEmailRequest extends BaseModel
{
	/**
	 * The user’s email address. The software uses this parameter as the
	 * username.
	 * 
	 * @var string 
	 */
	public $userEmail;
	/**
	 * The user’s first name. The software uses this parameter to verify
	 * the user.
	 * 
	 * @var string 
	 */
	public $userFirstName;
	/**
	 * The user’s last name. The software uses this parameter to verify the
	 * user.
	 * 
	 * @var string 
	 */
	public $userLastName;
	/**
	 * Constructor
	 */
	public function __construct($userEmail, $userFirstName, $userLastName)
	{
		$this->userEmail = $userEmail;
		$this->userFirstName = $userFirstName;
		$this->userLastName = $userLastName;
	}

	protected function getInputMap()
	{
		return [
			'UserEmail' => ['userEmail', 'string', null],
			'UserFirstName' => ['userFirstName', 'string', null],
			'UserLastName' => ['userLastName', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'userEmail' => ['UserEmail', 'string', null],
			'userFirstName' => ['UserFirstName', 'string', null],
			'userLastName' => ['UserLastName', 'string', null],
			];
	}
}
