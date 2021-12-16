<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('notes')->nullable();
            $table->string('tarrifPlan')->nullable();
            $table->string('facebookID')->nullable();
            $table->string('twitterID')->nullable();
            $table->string('vkontakteID')->nullable();
            $table->string('whatsappID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('website');
            $table->dropColumn('notes');
            $table->dropColumn('tarrifPlan');
            $table->dropColumn('facebookID');
            $table->dropColumn('twitterID');
            $table->dropColumn('vkontakteID');
            $table->dropColumn('whatsappID');
        });
    }
}
