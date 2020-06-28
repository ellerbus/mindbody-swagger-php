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
	 * @var number format:double
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
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The number of this item to be purchased.
	 * 
	 * @var integer format:int32
	 */
	public $quantity;

	protected function getInputMap()
	{
		return [
			'Item' => ['item', CheckoutItem::class, null],
			'DiscountAmount' => ['discountAmount', 'number', 'double'],
			'AppointmentBookingRequests' => ['appointmentBookingRequests', 'array', CheckoutAppointmentBookingRequest::class],
			'EnrollmentIds' => ['enrollmentIds', 'array', null],
			'ClassIds' => ['classIds', 'array', null],
			'CourseIds' => ['courseIds', 'array', null],
			'VisitIds' => ['visitIds', 'array', null],
			'AppointmentIds' => ['appointmentIds', 'array', null],
			'Id' => ['id', 'integer', 'int32'],
			'Quantity' => ['quantity', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'item' => ['Item', CheckoutItem::class, null],
			'discountAmount' => ['DiscountAmount', 'number', 'double'],
			'appointmentBookingRequests' => ['AppointmentBookingRequests', 'array', CheckoutAppointmentBookingRequest::class],
			'enrollmentIds' => ['EnrollmentIds', 'array', null],
			'classIds' => ['ClassIds', 'array', null],
			'courseIds' => ['CourseIds', 'array', null],
			'visitIds' => ['VisitIds', 'array', null],
			'appointmentIds' => ['AppointmentIds', 'array', null],
			'id' => ['Id', 'integer', 'int32'],
			'quantity' => ['Quantity', 'integer', 'int32'],
			];
	}
}
