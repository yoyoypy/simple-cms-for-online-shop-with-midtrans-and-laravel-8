<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductSpec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('volume')->after('tags')->nullable();
            $table->integer('length')->after('volume')->nullable();
            $table->integer('width')->after('length')->nullable();
            $table->integer('height')->after('width')->nullable();
            $table->integer('power')->after('height')->nullable();
            $table->string('color')->after('power')->nullable();
            $table->integer('warranty')->after('color')->nullable();
            $table->integer('rak')->after('warranty')->nullable();
            $table->string('temp')->after('rak')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('volume');
            $table->dropColumn('length');
            $table->dropColumn('width');
            $table->dropColumn('height');
            $table->dropColumn('power');
            $table->dropColumn('color');
            $table->dropColumn('warranty');
            $table->dropColumn('rak');
            $table->dropColumn('temp');
        });
    }
}
