<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  @return void
     */
    public function up()
    {
        Schema::create('Specialty', function (Blueprint $table) {
            $table->id();
            $table->string('specialtyName');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *  @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('specialty');
    }
};
