<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    
    public function up()
    {
        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('dataid');
            $table->string('datatype');
            $table->string('title');
            $table->text('details');
            $table->string('imgfile');
        });
    }

}
