<?php

namespace App\MindBody\Models;

/**
 * Gift card layout
 */
class GiftCardLayout extends BaseModel
{
	/**
	 * The ID of the layout.
	 * 
	 * @var integer
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
			'LayoutId' => 'layoutId',
			'LayoutName' => 'layoutName',
			];
	}

	protected function getOutputMap()
	{
		return [
			'layoutId' => 'LayoutId',
			'layoutName' => 'LayoutName',
			];
	}
}
