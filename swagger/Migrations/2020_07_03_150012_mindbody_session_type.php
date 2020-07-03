<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodySessionType extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_session_type', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->string('type', 50);
			$table->integer('default_time_length');
			$table->integer('id');
			$table->string('name', 50);
			$table->integer('num_deducted');
			$table->integer('program_id');
			$table->string('category', 50);
			$table->integer('category_id');
			$table->string('subcategory', 50);
			$table->integer('subcategory_id');

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
		Schema::dropIfExists('mindbody_session_type');
	}
}
