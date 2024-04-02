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
        Schema::create('had_tanggungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            $table->string('butiran_tanggungan');
            $table->decimal('jumlah_tanggungan', 10, 2)->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('had_tanggungan');
    }
};
