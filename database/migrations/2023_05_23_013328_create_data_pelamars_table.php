<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Mime\Email;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pelamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->foreignId('kode_jabatan');
            $table->string('jabatan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->enum('jenis_kelamin',['Pria' , 'Wanita']);
            $table->string('alamat_rumah');
            $table->enum('pendidikan_terakhir',['SMA','SMK','STM','S1','S2','S3','D3','D4']);
            $table->enum('status',['menikah','belum_menikah','cerai']);
            $table->bigInteger('nomor_ktp')->unique();
            $table->string('email');
            $table->bigInteger('no_telp');
            $table->bigInteger('no_kk');
            $table->string('npwp');
            $table->string('sertifikat_migas')->nullable();
            $table->date('masa_berlaku_sertifikat')->nullable();
            $table->enum('sim',['sim_a','sim_c','belum_punya'])->nullable();
            $table->string('pengalaman_kerja')->nullable();
            $table->string('pengalaman_jabatan')->nullable();
            $table->string('masa_jabatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pelamars');
    }
};
