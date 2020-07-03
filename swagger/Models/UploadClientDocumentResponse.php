<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UploadClientDocumentResponse extends BaseModel
{
	/**
	 * The size of the uploaded file.
	 * 
	 * @var integer format:int64
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
			'FileSize' => ['fileSize', 'integer', 'int64'],
			'FileName' => ['fileName', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'fileSize' => ['FileSize', 'integer', 'int64'],
			'fileName' => ['FileName', 'string', null],
			];
	}
}
