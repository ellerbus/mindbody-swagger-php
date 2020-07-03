<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyGiftCardLayout extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_gift_card_layout', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->integer('layout_id');
			$table->string('layout_name', 50);

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
		Schema::dropIfExists('mindbody_gift_card_layout');
	}
}
