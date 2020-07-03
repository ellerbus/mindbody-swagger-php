<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyAvailability extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_availability', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('id');
			$table->FK Staff('staff');
			$table->FK SessionType('session_type');
			$table->FK Program[]('programs');
			$table->dateTimeTz('start_date_time');
			$table->dateTimeTz('end_date_time');
			$table->dateTimeTz('bookable_end_date_time');
			$table->FK Location('location');

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
		Schema::dropIfExists('mindbody_availability');
	}
}
