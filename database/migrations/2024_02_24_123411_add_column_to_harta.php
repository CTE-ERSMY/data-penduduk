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
        Schema::table('harta', function (Blueprint $table) {
            $table->decimal('nilai_kediaman', 10, 2)->default('0.00')->after('kemudahan_tambahan');
            $table->decimal('nilai_astro', 10, 2)->default('0.00')->after('astro');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('harta', function (Blueprint $table) {
            $table->dropColumn('nilai_kediaman');
            $table->dropColumn('nilai_astro');
        });
    }
};
