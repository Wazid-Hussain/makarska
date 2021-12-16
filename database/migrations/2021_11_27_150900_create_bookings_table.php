<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('start_from');
            $table->date('end_to');
            $table->integer('user_id');
            $table->integer('listing_id');
            $table->integer('adults');
            $table->integer('children');
            $table->decimal('total_price',8,2);
            $table->boolean('status')->default(1)->comment('0->canceled 1->not canceled');
            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
