<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UploadClientDocumentResponse extends BaseModel
{
	/**
	 * The size of the uploaded file.
	 * 
	 * @var integer
	 */
	public $fileSize;
	/**
	 * The name of the uploaded file.
	 * 
	 * @var string
	 */
	public $fileName;

	protected function getInputMap()
	{
		return [
			'FileSize' => 'fileSize',
			'FileName' => 'fileName',
			];
	}

	protected function getOutputMap()
	{
		return [
			'fileSize' => 'FileSize',
			'fileName' => 'FileName',
			];
	}
}
