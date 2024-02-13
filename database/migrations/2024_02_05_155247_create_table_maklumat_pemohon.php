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
        Schema::create('table_maklumat_pemohon', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ic');
            $table->enum('jantina', ['Lelaki', 'Wanita']);
            $table->date('tarikh_lahir');
            $table->string('status');
            $table->enum('mental', ['Waras', 'Tidak waras']);
            $table->enum('islam', ['Baik', 'Kurang Baik']);
            $table->string('fizikal');
            $table->string('alamat');
            $table->string('poskod');
            $table->string('bandar')->default('Kota Tinggi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_maklumat_pemohon');
    }
};
