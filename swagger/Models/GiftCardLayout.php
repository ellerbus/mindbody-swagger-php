<?php

namespace App\Mindbody\Models;

/**
 * Gift card layout
 */
class GiftCardLayout extends BaseModel
{
	/**
	 * The ID of the layout.
	 * 
	 * @var integer format:int32
	 */
	public $layoutId;
	/**
	 * The name of the layout.
	 * 
	 * @var string 
	 */
	public $layoutName;

	protected function getInputMap()
	{
		return [
			'LayoutId' => ['layoutId', 'integer', 'int32'],
			'LayoutName' => ['layoutName', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'layoutId' => ['LayoutId', 'integer', 'int32'],
			'layoutName' => ['LayoutName', 'string', null],
			];
	}
}
