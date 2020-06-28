<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UploadClientPhotoResponse extends BaseModel
{
	/**
	 * The RSSID of the client for whom the photo was uploaded.
	 * 
	 * @var string
	 */
	public $clientId;
	/**
	 * The URL of the uploaded photo.
	 * 
	 * @var string
	 */
	public $photoUrl;

	protected function getInputMap()
	{
		return [
			'ClientId' => 'clientId',
			'PhotoUrl' => 'photoUrl',
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => 'ClientId',
			'photoUrl' => 'PhotoUrl',
			];
	}
}
