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
        Schema::table('maklumat_pasangan', function (Blueprint $table) {
            if (!Schema::hasColumn('maklumat_pasangan', 'maklumat_pemohon_id')) {
                $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            }
        });

        Schema::table('pendapatan', function (Blueprint $table) {
            if (!Schema::hasColumn('pendapatan', 'maklumat_pemohon_id')) {
                $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            }
        });

        Schema::table('perbelanjaan', function (Blueprint $table) {
            if (!Schema::hasColumn('perbelanjaan', 'maklumat_pemohon_id')) {
                $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            }
        });

        Schema::table('waris', function (Blueprint $table) {
            if (!Schema::hasColumn('waris', 'maklumat_pemohon_id')) {
                $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('maklumat_pasangan', function (Blueprint $table) {
            if (Schema::hasColumn('maklumat_pasangan', 'maklumat_pemohon_id')) {
                $table->dropForeign(['maklumat_pemohon_id']);
                $table->dropColumn('maklumat_pemohon_id');
            }
        });

        Schema::table('pendapatan', function (Blueprint $table) {
            if (Schema::hasColumn('pendapatan', 'maklumat_pemohon_id')) {
                $table->dropForeign(['maklumat_pemohon_id']);
                $table->dropColumn('maklumat_pemohon_id');
            }
        });

        Schema::table('perbelanjaan', function (Blueprint $table) {
            if (Schema::hasColumn('perbelanjaan', 'maklumat_pemohon_id')) {
                $table->dropForeign(['maklumat_pemohon_id']);
                $table->dropColumn('maklumat_pemohon_id');
            }
        });

        Schema::table('waris', function (Blueprint $table) {
            if (Schema::hasColumn('waris', 'maklumat_pemohon_id')) {
                $table->dropForeign(['maklumat_pemohon_id']);
                $table->dropColumn('maklumat_pemohon_id');
            }
        });
    }
};
