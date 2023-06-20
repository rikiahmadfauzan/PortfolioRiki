<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->text('fotoProfile');
            $table->string('namaLengkap');
            $table->string('status');
            $table->string('tempatTinggal');
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin',['Laki-laki','Perempuan']);
            $table->string('email');
            $table->string('hobi');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->string('telegram');
            $table->string('twittter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
