<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodySubstituteTeacherClass extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_substitute_teacher_class', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('class_schedule_id');
			$table->FK Location('location');
			$table->integer('max_capacity');
			$table->integer('web_capacity');
			$table->integer('total_booked');
			$table->integer('total_booked_waitlist');
			$table->integer('web_booked');
			$table->integer('semester_id');
			$table->boolean('is_canceled');
			$table->boolean('substitute');
			$table->boolean('active');
			$table->boolean('is_waitlist_available');
			$table->boolean('hide_cancel');
			$table->integer('id');
			$table->boolean('is_available');
			$table->dateTimeTz('start_date_time');
			$table->dateTimeTz('end_date_time');
			$table->dateTimeTz('last_modified_date_time');
			$table->FK ClassDescription('class_description');
			$table->FK Staff('staff');

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
		Schema::dropIfExists('mindbody_substitute_teacher_class');
	}
}