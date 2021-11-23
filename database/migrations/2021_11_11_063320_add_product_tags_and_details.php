<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductTagsAndDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('categories_id')
                    ->references('id')
                    ->on('product_categories')
                    ->onDelete('cascade')
                    ->after('slug')
                    ->nullable();

            $table->bigInteger('brands_id')
                    ->references('id')
                    ->on('brands')
                    ->onDelete('cascade')
                    ->after('categories_id')
                    ->nullable();

            $table->string('tags')->after('description')->nullable();
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
            $table->dropColumn('categories_id');
            $table->dropColumn('brands_id');
            $table->dropColumn('tags');
        });
    }
}
