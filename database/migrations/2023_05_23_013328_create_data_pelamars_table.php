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
            $table->string('jabatan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            // $table->integer('umur',100);
            // $table->enum('jenis_kelamin',['Pria' , 'Wanita']);
            // $table->string('alamat_rumah');
            // $table->enum('pendidikan_terakhir',['SMA','SMK','STM','S1','S2','S3','D3','D4']);
            // $table->enum('status',['menikah','belum_menikah','cerai']);
            // $table->integer('nomor_ktp')->unique();
            // $table->string('email');
            // $table->char('no_telp',20);
            // $table->integer('no_kk',50);
            // $table->integer('npwp');
            // $table->strng('sertifikat_migas');
            // $table->date('masa_berlaku');
            // $table->enum('sim',['sim_a','sim_c','belum_punya']);
            // $table->string('pengalaman_kerja');
            // $table->string('pengalaman_jabatan');
            // $table->string('masa_jabatan');
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
