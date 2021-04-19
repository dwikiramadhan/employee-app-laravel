<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id_employee');
            $table->string('nama_lengkap', 255);
            $table->string('nama_panggilan', 50);
            $table->string('kartu_identitas', 50);
            $table->string('nomor_identitas', 50);
            $table->dateTime('tgl_lahir');
            $table->string('no_hp', 50);
            $table->string('alamat', 255);
            $table->string('jabatan', 50);
            $table->integer('status');
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
        Schema::dropIfExists('employee');
    }
}
