<?php

namespace App\MindBody\Models;

/*
 * POST UserToken/Issue successful response
 */
class IssueResponse extends BaseModel
{
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $tokenType;
	/*
	 * The authentication token value.
	 * 
	 * @var string
	 */
	public $accessToken;
	/*
	 * Contains information about the user represented by the access token.
	 * 
	 * @var User
	 */
	public $user;
}