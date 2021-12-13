<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatAmenityListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenity_listing', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('listing_id');
            $table->unsignedInteger('amenity_id');

            $table->foreign('listing_id')->references('id')->on('listings');

            $table->foreign('amenity_id')->references('id')->on('amenities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenity_listing');
    }
}
