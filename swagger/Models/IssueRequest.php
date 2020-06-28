<?php

namespace App\MindBody\Models;

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
}
