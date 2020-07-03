<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyContactLog extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_contact_log', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('id');
			$table->string('text', 50);
			$table->dateTimeTz('created_date_time');
			$table->dateTimeTz('followup_by_date');
			$table->string('contact_method', 50);
			$table->string('contact_name', 50);
			$table->Client('client');
			$table->Staff('created_by');
			$table->Staff('assigned_to');
			$table->ContactLogComment[]('comments');
			$table->ContactLogType[]('types');

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
		Schema::dropIfExists('mindbody_contact_log');
	}
}
