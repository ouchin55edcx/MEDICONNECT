<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('medicamentName');
            $table->unsignedBigInteger('specialty_id');
            $table->timestamps();

            $table->foreign('specialty_id')
                ->references('id')->on('Specialty')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicaments');
    }

}
