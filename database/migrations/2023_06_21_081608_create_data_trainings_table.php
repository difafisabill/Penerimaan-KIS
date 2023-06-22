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
        Schema::create('data_trainings', function (Blueprint $table) {
            $table->string('nik');
            $table->primary('nik');
            $table->string('usia');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('pendapatan');
            $table->string('tanggungan_anak');
            $table->string('terima_kis');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_trainings');
    }
};
