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
        Schema::create('jumlah_kifayah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            $table->decimal('jumlah_tanggungan', 10, 2)->default('0.00');
            $table->decimal('jumlah_penambahan', 10, 2)->default('0.00');
            $table->decimal('jumlah_penolakan', 10, 2)->default('0.00');
            $table->decimal('jumlah_kifayah', 10, 2)->default('0.00');
            $table->string('keputusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_kifayah');
    }
};
