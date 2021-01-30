<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchoolTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('school_tb', function (Blueprint $table) {
            $table->id();
            $table->string('npsn');
            $table->string('name_school');
            $table->string('address');
            $table->string('logo_school');
            $table->string('school_level');
            $table->string('status_school');
            $table->string('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('school_tb');
    }
}
