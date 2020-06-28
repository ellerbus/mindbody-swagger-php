<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Package extends BaseModel
{
	/**
	 * The ID of the package.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the package.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * The discount percentage applied to the package.
	 * 
	 * @var number format:double
	 */
	public $discountPercentage;
	/**
	 * When `true`, only products that can be sold online are returned.<br />
	 * When `false`, all products are returned.
	 * 
	 * @var boolean 
	 */
	public $sellOnline;
	/**
	 * Information about the services in the packages.
	 * 
	 * @var Service[] 
	 */
	public $services;
	/**
	 * Information about the products in the packages.
	 * 
	 * @var Product[] 
	 */
	public $products;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'DiscountPercentage' => ['discountPercentage', 'number', 'double'],
			'SellOnline' => ['sellOnline', 'boolean', null],
			'Services' => ['services', 'array', Service::class],
			'Products' => ['products', 'array', Product::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'discountPercentage' => ['DiscountPercentage', 'number', 'double'],
			'sellOnline' => ['SellOnline', 'boolean', null],
			'services' => ['Services', 'array', Service::class],
			'products' => ['Products', 'array', Product::class],
			];
	}
}
