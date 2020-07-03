<?php

namespace App\Mindbody\Models;

/**
 * POST UserToken/Issue request
 */
class IssueRequest extends BaseModel
{
	/**
	 * The staff member’s username.
	 * 
	 * @var string 
	 */
	public $username;
	/**
	 * The staff member’s password.
	 * 
	 * @var string 
	 */
	public $password;

	protected function getInputMap()
	{
		return [
			'Username' => ['username', 'string', null],
			'Password' => ['password', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'username' => ['Username', 'string', null],
			'password' => ['Password', 'string', null],
			];
	}
}
