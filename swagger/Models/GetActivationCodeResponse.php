<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetActivationCodeResponse extends BaseModel
{
	/**
	 * An activation code used to provide access to a site’s business data
	 * through MINDBODY.
	 * 
	 * @var string
	 */
	public $activationCode;
	/**
	 * A link to the Manage Credentials screen.
	 * 
	 * @var string
	 */
	public $activationLink;
}
