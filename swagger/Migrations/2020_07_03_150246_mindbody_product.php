<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyProduct extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_product', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->double('price');
			$table->double('tax_included');
			$table->double('tax_rate');
			$table->string('id', 50);
			$table->integer('group_id');
			$table->string('name', 50);
			$table->double('online_price');
			$table->string('short_description', 50);
			$table->string('long_description', 50);
			$table->Color('color');
			$table->Size('size');

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
		Schema::dropIfExists('mindbody_product');
	}
}
