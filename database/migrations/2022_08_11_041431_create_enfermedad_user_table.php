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
        Schema::create('enfermedad_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enfermedad_id');
            $table->unsignedBigInteger('user_id');
			
			$table->foreign('user_id')->references('id')->on('users')
                        ->onUpdate('cascade')->onDelete('cascade');
						
						
			$table->foreign('enfermedad_id')->references('id')->on('enfermedades')
                        ->onUpdate('cascade')->onDelete('cascade');
        });
    }
	
	
	

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermedad_user');
    }
};
