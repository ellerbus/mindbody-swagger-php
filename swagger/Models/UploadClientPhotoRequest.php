<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class UploadClientPhotoRequest extends BaseModel
{
	/*
	 * A Base64-encoded string representation of the image’s byte array.
	 * 
	 * @var string
	 */
	public $bytes;
	/*
	 * The RSSID of the client for whom the photo is to be uploaded.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 *
	 */
	public function __construct($bytes, $clientId)
	{
		$this->bytes = $bytes;
		$this->clientId = $clientId;
	}
}
