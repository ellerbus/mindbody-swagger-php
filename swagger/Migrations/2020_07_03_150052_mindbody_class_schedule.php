<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyClassSchedule extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_class_schedule', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->Class[]('classes');
			$table->Client[]('clients');
			$table->Course('course');
			$table->integer('semester_id');
			$table->boolean('is_available');
			$table->integer('id');
			$table->ClassDescription('class_description');
			$table->boolean('day_sunday');
			$table->boolean('day_monday');
			$table->boolean('day_tuesday');
			$table->boolean('day_wednesday');
			$table->boolean('day_thursday');
			$table->boolean('day_friday');
			$table->boolean('day_saturday');
			$table->boolean('allow_open_enrollment');
			$table->boolean('allow_date_forward_enrollment');
			$table->dateTimeTz('start_time');
			$table->dateTimeTz('end_time');
			$table->dateTimeTz('start_date');
			$table->dateTimeTz('end_date');
			$table->Staff('staff');
			$table->Location('location');

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
		Schema::dropIfExists('mindbody_class_schedule');
	}
}
