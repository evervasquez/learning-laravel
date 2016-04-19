<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });

        Schema::table('pictures', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });

        Schema::table('shop_carts', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
            $table->dropForeign('products_category_id_foreign');
        });

        Schema::table('pictures', function (Blueprint $table) {
            $table->dropForeign('pictures_product_id_foreign');
        });

        Schema::table('shop_carts', function (Blueprint $table) {
            $table->dropForeign('shop_carts_product_id_foreign');
            $table->dropForeign('shop_carts_user_id_foreign');
        });
    }
}
