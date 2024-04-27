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
        Schema::create('sejarah_bantuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')->constrained()->on('maklumat_pemohon');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('nama_bantuan');
            $table->string('no_akaun');
            $table->date('tarikh_mohon');
            $table->date('tarikh_lulus');
            $table->date('tarikh_mula');
            $table->decimal('jumlah_lulus', 10, 2);
            $table->string('status_bantuan');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sejarah_bantuan');
    }
};
