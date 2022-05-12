<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jk');
            $table->string('nik');
            $table->string('alamat');
            $table->string('agama');
            $table->string('no_telp');
            $table->integer('penerima_kps')->default(0);
            $table->string('no_kps')->default(0);
            $table->string('foto');
            $table->string('foto_kk');
            $table->string('foto_akte');
            $table->string('email');
            $table->string('jenis_tinggal');
            $table->string('alat_transportasi');
            //BIodata Ayah
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('nik_ayah');
            $table->string('pendidikan_terakhir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('status_ayah');
            $table->string('penghasilan_ayah');
            //Biodata Ibu
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('nik_ibu');
            $table->string('pendidikan_terakhir_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('status_ibu');
            $table->string('penghasilan_ibu');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username')->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
