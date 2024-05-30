<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risalah', function (Blueprint $table) {
            $table->id();
            $table->string('id_risalah');
            $table->string('hasil');
            $table->json('dokumentasi');
            //$table->string('ttd_pimpinan');
            //$table->string('ttd_ketua');
            //$table->string('tta_notulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risalah');
    }
};
