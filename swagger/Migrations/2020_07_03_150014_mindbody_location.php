<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MindBodyLocation extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mindbody_location', function (Blueprint $table)
		{
			$table->charset = 'utf8mb4';
			$table->collation = 'utf8mb4_unicode_ci';

			$table->integer('organization_id');
			$table->FK string[]('additional_image_ur_ls');
			$table->string('address', 50);
			$table->string('address_2', 50);
			$table->FK Amenity[]('amenities');
			$table->string('business_description', 50);
			$table->string('city', 50);
			$table->string('description', 50);
			$table->boolean('has_classes');
			$table->integer('id');
			$table->double('latitude');
			$table->double('longitude');
			$table->string('name', 50);
			$table->string('phone', 50);
			$table->string('phone_extension', 50);
			$table->string('postal_code', 50);
			$table->integer('site_id');
			$table->string('state_prov_code', 50);
			$table->double('tax_1');
			$table->double('tax_2');
			$table->double('tax_3');
			$table->double('tax_4');
			$table->double('tax_5');
			$table->integer('total_number_of_ratings');
			$table->double('average_rating');
			$table->integer('total_number_of_deals');

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
		Schema::dropIfExists('mindbody_location');
	}
}
