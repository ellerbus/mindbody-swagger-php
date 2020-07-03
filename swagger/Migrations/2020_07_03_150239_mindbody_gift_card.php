<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyGiftCard extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_gift_card', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('id');
			$table->integer[]('location_ids');
			$table->string('description', 50);
			$table->boolean('editable_by_consumer');
			$table->double('card_value');
			$table->double('sale_price');
			$table->boolean('sold_online');
			$table->integer[]('membership_restriction_ids');
			$table->string('gift_card_terms', 50);
			$table->string('contact_info', 50);
			$table->boolean('display_logo');
			$table->GiftCardLayout[]('layouts');

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
		Schema::dropIfExists('mindbody_gift_card');
	}
}
