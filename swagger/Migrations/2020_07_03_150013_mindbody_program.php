<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyProgram extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_program', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('id');
			$table->string('name', 50);
			$table->string('schedule_type', 50);
			$table->integer('cancel_offset');

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
		Schema::dropIfExists('mindbody_program');
	}
}