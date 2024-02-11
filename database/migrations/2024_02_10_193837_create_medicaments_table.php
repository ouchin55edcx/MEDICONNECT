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
            $table->unsignedBigInteger('specialty_id'); // Foreign key column
            $table->timestamps();
    
            // Foreign key constraint
            $table->foreign('specialty_id')
                  ->references('id')->on('specialties')
                  ->onDelete('cascade'); // You can adjust the onDelete behavior as needed
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}
