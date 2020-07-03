<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyClient extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_client', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->string('appointment_gender_preference', 50);
			$table->dateTimeTz('birth_date');
			$table->string('country', 50);
			$table->dateTimeTz('creation_date');
			$table->FK CustomClientFieldValue[]('custom_client_fields');
			$table->FK ClientCreditCard('client_credit_card');
			$table->FK AssignedClientIndex[]('client_indexes');
			$table->FK ClientRelationship[]('client_relationships');
			$table->dateTimeTz('first_appointment_date');
			$table->string('first_name', 50);
			$table->string('id', 50);
			$table->boolean('is_company');
			$table->boolean('is_prospect');
			$table->string('last_name', 50);
			$table->FK Liability('liability');
			$table->boolean('liability_release');
			$table->integer('membership_icon');
			$table->integer('mobile_provider');
			$table->string('notes', 50);
			$table->string('state', 50);
			$table->integer('unique_id');
			$table->dateTimeTz('last_modified_date_time');
			$table->string('red_alert', 50);
			$table->string('yellow_alert', 50);
			$table->string('middle_name', 50);
			$table->FK ProspectStage('prospect_stage');
			$table->string('email', 50);
			$table->string('mobile_phone', 50);
			$table->string('home_phone', 50);
			$table->string('work_phone', 50);
			$table->double('account_balance');
			$table->string('address_line_1', 50);
			$table->string('address_line_2', 50);
			$table->string('city', 50);
			$table->string('postal_code', 50);
			$table->string('work_extension', 50);
			$table->string('referred_by', 50);
			$table->string('photo_url', 50);
			$table->string('emergency_contact_info_name', 50);
			$table->string('emergency_contact_info_email', 50);
			$table->string('emergency_contact_info_phone', 50);
			$table->string('emergency_contact_info_relationship', 50);
			$table->string('gender', 50);
			$table->string('last_formula_notes', 50);
			$table->boolean('active');
			$table->FK SalesRep[]('sales_reps');
			$table->string('status', 50);
			$table->string('action', 50);
			$table->boolean('send_account_emails');
			$table->boolean('send_account_texts');
			$table->boolean('send_promotional_emails');
			$table->boolean('send_promotional_texts');
			$table->boolean('send_schedule_emails');
			$table->boolean('send_schedule_texts');

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
		Schema::dropIfExists('mindbody_client');
	}
}
