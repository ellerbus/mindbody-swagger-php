<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyClientCreditCard extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_client_credit_card', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->string('address', 50);
			$table->string('card_holder', 50);
			$table->string('card_number', 50);
			$table->string('card_type', 50);
			$table->string('city', 50);
			$table->string('exp_month', 50);
			$table->string('exp_year', 50);
			$table->string('last_four', 50);
			$table->string('postal_code', 50);
			$table->string('state', 50);

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
		Schema::dropIfExists('mindbody_client_credit_card');
	}
}
