<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyContract extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_contract', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('id');
			$table->string('name', 50);
			$table->string('description', 50);
			$table->integer('assigns_membership_id');
			$table->string('assigns_membership_name', 50);
			$table->boolean('sold_online');
			$table->FK ContractItem[]('contract_items');
			$table->string('intro_offer', 50);
			$table->FK AutopaySchedule('autopay_schedule');
			$table->integer('number_of_autopays');
			$table->string('autopay_trigger_type', 50);
			$table->string('action_upon_completion_of_autopays', 50);
			$table->string('clients_charged_on', 50);
			$table->dateTimeTz('clients_charged_on_specific_date');
			$table->double('discount_amount');
			$table->double('deposit_amount');
			$table->boolean('first_autopay_free');
			$table->boolean('last_autopay_free');
			$table->boolean('client_terminate_online');
			$table->FK MembershipTypeRestriction[]('membership_type_restrictions');
			$table->FK integer[]('location_purchase_restriction_ids');
			$table->FK string[]('location_purchase_restriction_names');
			$table->string('agreement_terms', 50);
			$table->boolean('requires_electronic_confirmation');
			$table->boolean('autopay_enabled');
			$table->double('first_payment_amount_subtotal');
			$table->double('first_payment_amount_tax');
			$table->double('first_payment_amount_total');
			$table->double('recurring_payment_amount_subtotal');
			$table->double('recurring_payment_amount_tax');
			$table->double('recurring_payment_amount_total');
			$table->double('total_contract_amount_subtotal');
			$table->double('total_contract_amount_tax');
			$table->double('total_contract_amount_total');

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
		Schema::dropIfExists('mindbody_contract');
	}
}
