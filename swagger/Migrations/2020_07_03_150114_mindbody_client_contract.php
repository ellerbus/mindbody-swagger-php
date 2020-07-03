<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyClientContract extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_client_contract', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->dateTimeTz('agreement_date');
			$table->string('autopay_status', 50);
			$table->string('contract_name', 50);
			$table->dateTimeTz('end_date');
			$table->integer('id');
			$table->integer('origination_location_id');
			$table->dateTimeTz('start_date');
			$table->integer('site_id');
			$table->FK UpcomingAutopayEvent[]('upcoming_autopay_events');

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
		Schema::dropIfExists('mindbody_client_contract');
	}
}
