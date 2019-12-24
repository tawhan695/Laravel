<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('Member_id');
            $table->string('Member_titel');
            $table->string('Member_name');
            $table->string('Member_last_name');
            $table->date('Date_birth');
            $table->integer('Member_age');
            $table->float('End_heiht');
            $table->string('Member_username');
            $table->string('Member_password');
            $table->string('Member_email')->unique();
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
        Schema::dropIfExists('member');
    }
}
