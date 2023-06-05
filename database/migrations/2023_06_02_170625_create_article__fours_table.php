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
        Schema::create('article__fours', function (Blueprint $table) {
            $table->id();
            $table->foreignId("commande_four_id")->onDeleteCascade();
            $table->foreignId("produit_id")->onDeleteCascade();
            $table->integer("qteC_Artf");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article__fours');
    }
};
