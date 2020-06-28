<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class ClientDocument extends BaseModel
{
	/*
	 * The name of the file to be used on the client’s documents page when
	 * it is uploaded.
	 * 
	 * @var string
	 */
	public $fileName;
	/*
	 * The type of file or file extension. Possible values are:  * pdf  * jpg
	 * * jpeg  * tif  * tiff  * png  * doc  * docx  * bmp  * txt  * rtf  *
	 * xlsx  * xls  * gif  * zip  * ppt  * pptx  * mov
	 * 
	 * @var string
	 */
	public $mediaType;
	/*
	 * A Base64-encoded string representation of the file’s byte array.
	 * 
	 * @var string
	 */
	public $buffer;
	/*
	 * Constructor
	 */
	public function __construct($fileName, $mediaType, $buffer)
	{
		$this->fileName = $fileName;
		$this->mediaType = $mediaType;
		$this->buffer = $buffer;
	}
}
