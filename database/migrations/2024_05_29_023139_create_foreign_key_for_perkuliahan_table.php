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
        Schema::table('perkuliahans', function (Blueprint $table) {
            $table->foreign('npm_mhs')->references('id')->on('mahasiswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nidn_dosen')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_mk')->references('id')->on('matakuliahs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::table('perkuliahans', function (Blueprint $table) {
        $table->dropForeign('perkuliahans_npm_mhs_foreign');
        $table->dropForeign('perkuliahans_nidn_dosen_foreign');
        $table->dropForeign('perkuliahans_kode_mk_foreign');
     });

   }

};