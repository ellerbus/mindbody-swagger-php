<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyAddClientToClassVisit extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_add_client_to_class_visit', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('appointment_id');
			$table->string('appointment_gender_preference', 50);
			$table->string('appointment_status', 50);
			$table->integer('class_id');
			$table->string('client_id', 50);
			$table->dateTimeTz('start_date_time');
			$table->dateTimeTz('end_date_time');
			$table->integer('id');
			$table->dateTimeTz('last_modified_date_time');
			$table->boolean('late_cancelled');
			$table->integer('location_id');
			$table->boolean('make_up');
			$table->string('name', 50);
			$table->integer('service_id');
			$table->string('service_name', 50);
			$table->integer('product_id');
			$table->boolean('signed_in');
			$table->integer('staff_id');
			$table->boolean('web_signup');
			$table->string('action', 50);
			$table->boolean('cross_regional_booking_performed');
			$table->integer('site_id');
			$table->integer('waitlist_entry_id');

			$table->timestamps();
			$table->softDeletes('deleted_at');

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
		Schema::dropIfExists('mindbody_add_client_to_class_visit');
	}
}
