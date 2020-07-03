<?php

namespace App\Mindbody\Models;

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

	protected function getInputMap()
	{
		return [
			'ActivationCode' => ['activationCode', 'string', null],
			'ActivationLink' => ['activationLink', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'activationCode' => ['ActivationCode', 'string', null],
			'activationLink' => ['ActivationLink', 'string', null],
			];
	}
}
