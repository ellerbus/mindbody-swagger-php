<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UploadClientDocumentRequest extends BaseModel
{
	/**
	 * The RSSID of the client for whom the document is to be uploaded.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * Contains information about the file to be uploaded.
	 * 
	 * @var ClientDocument 
	 */
	public $file;
	/**
	 * Constructor
	 */
	public function __construct($clientId, $file)
	{
		$this->clientId = $clientId;
		$this->file = $file;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'File' => ['file', ClientDocument::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'file' => ['File', ClientDocument::class, null],
			];
	}
}
