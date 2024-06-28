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
        Schema::create('perkuliahans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('npm_mhs')->unsigned()->index();
            $table->bigInteger('nidn_dosen')->unsigned()->index();
            $table->bigInteger('kode_mk')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkuliahans');
    }
};




