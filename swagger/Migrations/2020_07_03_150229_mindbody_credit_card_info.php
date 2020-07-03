<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyCreditCardInfo extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_credit_card_info', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->string('credit_card_number', 50);
			$table->string('exp_month', 50);
			$table->string('exp_year', 50);
			$table->string('billing_name', 50);
			$table->string('billing_address', 50);
			$table->string('billing_city', 50);
			$table->string('billing_state', 50);
			$table->string('billing_postal_code', 50);
			$table->boolean('save_info');

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
		Schema::dropIfExists('mindbody_credit_card_info');
	}
}
