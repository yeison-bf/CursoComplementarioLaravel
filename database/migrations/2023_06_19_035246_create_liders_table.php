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
        Schema::create('liders', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('lastnames');
            $table->string('document');
            $table->string('type_document');
            $table->string('expedition');
            $table->string('sex');

            $table->string('city');
            $table->string('location')->nullable();
            $table->string('celular');
            $table->string('email');
            $table->integer('estado');

            $table->integer('lugarVotacion');
            $table->integer('mesaVotacion');

            $table->integer('company');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liders');
    }
};
