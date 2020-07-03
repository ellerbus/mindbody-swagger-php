<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodySite extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_site', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->boolean('accepts_american_express');
			$table->boolean('accepts_discover');
			$table->boolean('accepts_master_card');
			$table->boolean('accepts_visa');
			$table->boolean('allows_dashboard_access');
			$table->string('contact_email', 50);
			$table->string('description', 50);
			$table->integer('id');
			$table->string('logo_url', 50);
			$table->string('name', 50);
			$table->string('page_color_1', 50);
			$table->string('page_color_2', 50);
			$table->string('page_color_3', 50);
			$table->string('page_color_4', 50);
			$table->string('pricing_level', 50);
			$table->boolean('sms_package_enabled');
			$table->boolean('tax_inclusive_prices');
			$table->string('currency_iso_code', 50);
			$table->string('country_code', 50);
			$table->string('time_zone', 50);
			$table->boolean('accepts_direct_debit');

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
		Schema::dropIfExists('mindbody_site');
	}
}
