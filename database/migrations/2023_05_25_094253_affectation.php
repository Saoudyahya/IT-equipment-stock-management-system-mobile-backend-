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
        Schema::create('affectation', function (Blueprint $table) {
            $table->increments('id_affectation');
            $table->string('localisation');
            $table->string('date');
            $table->string('batiment');
            $table->string('departement')->nullable();
            $table->integer('etage');
            $table->string('user')->nullable();
            $table->string('materiel');
        
            
            $table->foreign('materiel')->references('ser')->on('materiel')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('departement')->references('name')->on('departement')->onDelete('set null')->onUpdate('cascade');
            
            
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectation'); //
    }
};
