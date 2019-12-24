<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMambersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mamber', function (Blueprint $table) {
            $table->bigIncrements('Member_id',13);
            $table->string('Member_titel',15);
            $table->string('Member_name',50);
            $table->string('Member_last_name',50);
            $table->date('Date_birth');
            $table->integer('Member_age',2);
            $table->float('End_heiht');
            $table->string('Member_username',50);
            $table->string('Member_password',50);
            $table->string('Member_email',50)->unique();
            $table->string('status',50);
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
        Schema::dropIfExists('mamber');
    }
}
