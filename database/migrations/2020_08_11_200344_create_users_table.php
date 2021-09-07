<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_usuarios')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->integer('id_numemp')->default(1);
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('is_vend')->nullable();
            $table->string('session_id',50)->nullable();
            $table->text('impresora')->nullable();
            $table->string('estado',20);
            $table->text('foto')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down()
    {   
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::disableForeignKeyConstraints();
        Schema::connection('mov_usuarios')->dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
