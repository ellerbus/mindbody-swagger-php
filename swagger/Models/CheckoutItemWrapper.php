<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class CheckoutItemWrapper extends BaseModel
{
	/**
	 * Information about an item in the cart.
	 * 
	 * @var CheckoutItem
	 */
	public $item;
	/**
	 * The amount the item is discounted. This parameter is ignored for
	 * packages.
	 * 
	 * @var number
	 */
	public $discountAmount;
	/**
	 * A list of appointments to be booked then paid for by this item. This
	 * parameter applies only to pricing option items.
	 * 
	 * @var CheckoutAppointmentBookingRequest[]
	 */
	public $appointmentBookingRequests;
	/**
	 * A list of enrollment IDs that this item is to pay for. This parameter
	 * applies only to pricing option items.
	 * 
	 * @var integer[]
	 */
	public $enrollmentIds;
	/**
	 * A list of class IDs that this item is to pay for. This parameter
	 * applies only to pricing option items.
	 * 
	 * @var integer[]
	 */
	public $classIds;
	/**
	 * A list of course IDs that this item is to pay for. This parameter
	 * applies only to pricing option items.
	 * 
	 * @var integer[]
	 */
	public $courseIds;
	/**
	 * A list of visit IDs that this item is to pay for. This parameter
	 * applies only to pricing option items.
	 * 
	 * @var integer[]
	 */
	public $visitIds;
	/**
	 * A list of appointment IDs that this item is to reconcile.
	 * 
	 * @var integer[]
	 */
	public $appointmentIds;
	/**
	 * The item’s unique ID within the cart.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The number of this item to be purchased.
	 * 
	 * @var integer
	 */
	public $quantity;

	protected function getInputMap()
	{
		return [
			'Item' => ['item', CheckoutItem::class],
			'DiscountAmount' => 'discountAmount',
			'AppointmentBookingRequests' => ['appointmentBookingRequests', CheckoutAppointmentBookingRequest::class],
			'EnrollmentIds' => 'enrollmentIds',
			'ClassIds' => 'classIds',
			'CourseIds' => 'courseIds',
			'VisitIds' => 'visitIds',
			'AppointmentIds' => 'appointmentIds',
			'Id' => 'id',
			'Quantity' => 'quantity',
			];
	}

	protected function getOutputMap()
	{
		return [
			'item' => 'Item',
			'discountAmount' => 'DiscountAmount',
			'appointmentBookingRequests' => 'AppointmentBookingRequests',
			'enrollmentIds' => 'EnrollmentIds',
			'classIds' => 'ClassIds',
			'courseIds' => 'CourseIds',
			'visitIds' => 'VisitIds',
			'appointmentIds' => 'AppointmentIds',
			'id' => 'Id',
			'quantity' => 'Quantity',
			];
	}
}
