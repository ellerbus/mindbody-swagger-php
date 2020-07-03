<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyClassDescription extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_class_description', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->boolean('active');
			$table->string('description', 50);
			$table->integer('id');
			$table->string('image_url', 50);
			$table->dateTimeTz('last_updated');
			$table->FK Level('level');
			$table->string('name', 50);
			$table->string('notes', 50);
			$table->string('prereq', 50);
			$table->FK Program('program');
			$table->FK SessionType('session_type');
			$table->string('category', 50);
			$table->integer('category_id');
			$table->string('subcategory', 50);
			$table->integer('subcategory_id');

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
		Schema::dropIfExists('mindbody_class_description');
	}
}
