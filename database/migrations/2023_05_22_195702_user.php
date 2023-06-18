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
        Schema::create('User', function (Blueprint $table) {
           
            
            $table->string('name')->nullable();
            $table->string('departement')->nullable(); // Add nullable() to allow NULL values
            $table->increments('id_user');
            
            $table->foreign('departement')->references('name')->on('departement')->onDelete('set null')->onUpdate('cascade');;
        });   //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');    //
    }
};
