<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class Package extends BaseModel
{
	/*
	 * The ID of the package.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The name of the package.
	 * 
	 * @var string
	 */
	public $name;
	/*
	 * The discount percentage applied to the package.
	 * 
	 * @var number
	 */
	public $discountPercentage;
	/*
	 * When `true`, only products that can be sold online are returned.<br />
	 * When `false`, all products are returned.
	 * 
	 * @var boolean
	 */
	public $sellOnline;
	/*
	 * Information about the services in the packages.
	 * 
	 * @var Service[]
	 */
	public $services;
	/*
	 * Information about the products in the packages.
	 * 
	 * @var Product[]
	 */
	public $products;
}
