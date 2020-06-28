<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UploadClientPhotoRequest extends BaseModel
{
	/**
	 * A Base64-encoded string representation of the image’s byte array.
	 * 
	 * @var string format:byte
	 */
	public $bytes;
	/**
	 * The RSSID of the client for whom the photo is to be uploaded.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * Constructor
	 */
	public function __construct($bytes, $clientId)
	{
		$this->bytes = $bytes;
		$this->clientId = $clientId;
	}

	protected function getInputMap()
	{
		return [
			'Bytes' => ['bytes', 'string', 'byte'],
			'ClientId' => ['clientId', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'bytes' => ['Bytes', 'string', 'byte'],
			'clientId' => ['ClientId', 'string', null],
			];
	}
}
