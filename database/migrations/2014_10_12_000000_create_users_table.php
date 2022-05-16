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
        //is_status = 0 // belum di seleksi
        //is_status = 1 // diterima di seleksi
        //is_status = 2 // ditolak di seleksi
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jk')->nullable();
            $table->string('nik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('penerima_kps')->default(0);
            $table->string('no_kps')->default(0);
            $table->string('foto')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('foto_akte')->nullable();
            $table->string('email')->nullable();
            $table->string('jenis_tinggal')->nullable();
            $table->string('alat_transportasi')->nullable();
            //BIodata Ayah
            $table->string('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('pendidikan_terakhir_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('status_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            //Biodata Ibu
            $table->string('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('pendidikan_terakhir_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('status_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');
            $table->integer('role')->default(1);
            $table->integer('is_status')->default(0);
            $table->string('username')->unique();
            $table->string('pesan_seleksi')->nullable();
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
