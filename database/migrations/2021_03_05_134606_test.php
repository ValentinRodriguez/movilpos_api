<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Test extends Migration
{
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->integer('cod_sp');
            $table->integer('cod_sp_sec');
            $keys = array('cod_sp', 'cod_sp_sec');
            $table->primary($keys);
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
