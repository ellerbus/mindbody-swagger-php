<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyAppointment extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_appointment', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->string('gender_preference', 50);
			$table->integer('duration');
			$table->string('provider_id', 50);
			$table->integer('id');
			$table->string('status', 50);
			$table->dateTimeTz('start_date_time');
			$table->dateTimeTz('end_date_time');
			$table->string('notes', 50);
			$table->boolean('staff_requested');
			$table->integer('program_id');
			$table->integer('session_type_id');
			$table->integer('location_id');
			$table->integer('staff_id');
			$table->string('client_id', 50);
			$table->boolean('first_appointment');
			$table->integer('client_service_id');
			$table->FK Resource[]('resources');

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
		Schema::dropIfExists('mindbody_appointment');
	}
}
