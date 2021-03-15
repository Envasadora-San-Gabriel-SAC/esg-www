<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateWhProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wh_products', function (Blueprint $table) {
            $table->id();
            $table->string('productname',100);
            $table->string('filename',200);
            $table->timestamps();
        });
        /* Agregamos los productos  */
        DB::table('wh_products')->insert([
            'productname' => 'MEGALATEX',
            'filename' => 'images/product/balde.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'PERFECT MATE',
            'filename' => 'images/product/balde.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'SATINADO',
            'filename' => 'images/product/balde.png',
        ]);

        // DUPLICADOS
        DB::table('wh_products')->insert([
            'productname' => 'DIESEL B5S50',
            'filename' => 'images/product/db5s50.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'GASOHOL 90',
            'filename' => 'images/product/gh90.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'GASOHOL 95',
            'filename' => 'images/product/gh95.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'SOLVENTE 1 PETRO',
            'filename' => 'images/product/cil55.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'SOLVENTE 3 PETRO',
            'filename' => 'images/product/cil55.png',
        ]);
        DB::table('wh_products')->insert([
            'productname' => 'HAS',
            'filename' => 'images/product/cil55.png',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wh_products');
    }
}
