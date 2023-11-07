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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            // //Liaison avec la table Category
            // $table->unsignedBigInteger('category_id');
            // $table->foreignId("category_id")->references('id')->on('categories');
            // //Champs pour la formation
            $table->string('category');
            $table->string('title');
            $table->string('duree');
            $table->string('rcnp');
            $table->text('prerequis');
            $table->text('objectifs');
            $table->string('image');
            $table->string('cout');
            $table->float('successPercent');
            $table->float('satisfyPercent');
            $table->string('programmeDeFormation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
