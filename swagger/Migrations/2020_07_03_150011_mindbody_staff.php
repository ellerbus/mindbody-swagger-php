<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyStaff extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_staff', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->string('address', 50);
			$table->boolean('appointment_instructor');
			$table->boolean('always_allow_double_booking');
			$table->string('bio', 50);
			$table->string('city', 50);
			$table->string('country', 50);
			$table->string('email', 50);
			$table->string('first_name', 50);
			$table->string('home_phone', 50);
			$table->integer('id');
			$table->boolean('independent_contractor');
			$table->boolean('is_male');
			$table->string('last_name', 50);
			$table->string('mobile_phone', 50);
			$table->string('name', 50);
			$table->string('postal_code', 50);
			$table->boolean('class_teacher');
			$table->integer('sort_order');
			$table->string('state', 50);
			$table->string('work_phone', 50);
			$table->string('image_url', 50);
			$table->Appointment[]('appointments');
			$table->Unavailability[]('unavailabilities');
			$table->Availability[]('availabilities');

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
		Schema::dropIfExists('mindbody_staff');
	}
}
