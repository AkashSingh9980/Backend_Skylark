<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
   
    public function up()
    {
        Schema::create('packages',function(Blueprint $table){
            $table->increments('id');
            $table->string('data-id');
            $table->string('data-type');
            $table->string('title');
            $table->string('price');
            $table->string('header');
            $table->text('description');
        });
    }

}
