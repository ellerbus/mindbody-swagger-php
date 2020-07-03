<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyWaitlistEntry extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_waitlist_entry', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->dateTimeTz('class_date');
			$table->integer('class_id');
			$table->FK ClassSchedule('class_schedule');
			$table->FK Client('client');
			$table->dateTimeTz('enrollment_date_forward');
			$table->integer('id');
			$table->dateTimeTz('request_date_time');
			$table->integer('visit_ref_no');
			$table->boolean('web');

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
		Schema::dropIfExists('mindbody_waitlist_entry');
	}
}
