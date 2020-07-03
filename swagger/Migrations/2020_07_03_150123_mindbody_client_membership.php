<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyClientMembership extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_client_membership', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->Location[]('restricted_locations');
			$table->string('icon_code', 50);
			$table->integer('membership_id');
			$table->dateTimeTz('active_date');
			$table->integer('count');
			$table->boolean('current');
			$table->dateTimeTz('expiration_date');
			$table->integer('id');
			$table->integer('product_id');
			$table->string('name', 50);
			$table->dateTimeTz('payment_date');
			$table->Program('program');
			$table->integer('remaining');
			$table->integer('site_id');
			$table->string('action', 50);

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
		Schema::dropIfExists('mindbody_client_membership');
	}
}
