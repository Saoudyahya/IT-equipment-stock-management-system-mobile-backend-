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
        Schema::create('materiel', function (Blueprint $table) {
           
            $table->string('ser')->primary();
            $table->string('type')->nullable();
            $table->string('mark')->nullable();
            $table->string('model')->nullable();
            $table->string('code_2m')->nullable();
            $table->foreign('type')->references('name')->on('types')->onDelete('set null')->onUpdate('cascade');;
        });//
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materile');//
    }
};
