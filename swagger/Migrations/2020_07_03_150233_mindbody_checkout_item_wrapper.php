<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyCheckoutItemWrapper extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_checkout_item_wrapper', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->FK CheckoutItem('item');
			$table->double('discount_amount');
			$table->FK CheckoutAppointmentBookingRequest[]('appointment_booking_requests');
			$table->FK integer[]('enrollment_ids');
			$table->FK integer[]('class_ids');
			$table->FK integer[]('course_ids');
			$table->FK integer[]('visit_ids');
			$table->FK integer[]('appointment_ids');
			$table->integer('id');
			$table->integer('quantity');

			$keys = ['organization_id', 'id'];

			$table->primary($keys);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('mindbody_checkout_item_wrapper');
	}
}
