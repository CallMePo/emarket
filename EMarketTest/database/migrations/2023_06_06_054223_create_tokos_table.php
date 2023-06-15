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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->char('namaToko');
            $table->char('jamOperasiToko');
            $table->char('kontakToko');
            $table->char('lokasiToko');
            $table->char('ukuranToko');
            $table->char('hargaToko');
            $table->char('kotaToko');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
