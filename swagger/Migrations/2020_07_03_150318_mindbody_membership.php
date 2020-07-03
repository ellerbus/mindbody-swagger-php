<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyMembership extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_membership', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('membership_id');
			$table->string('membership_name', 50);
			$table->integer('priority');
			$table->double('member_retail_discount');
			$table->double('member_service_discount');
			$table->boolean('allow_clients_to_schedule_unpaid');
			$table->FK ProgramMembership[]('online_booking_restricted_to_members_only');
			$table->integer('day_of_month_scheduling_opens_for_next_month');
			$table->boolean('restrict_self_sign_in_to_members_only');
			$table->boolean('allow_members_to_book_appointments_without_paying');
			$table->boolean('allow_members_to_purchase_non_members_services');
			$table->boolean('allow_members_to_purchase_non_members_products');
			$table->boolean('is_active');

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
		Schema::dropIfExists('mindbody_membership');
	}
}
