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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string("code_prod")->nullable();
            $table->string("nom_prod");
            $table->string("descri_prod");
            $table->integer('prix_prod');
            $table->string("url_prod");
            $table->foreignId("categorie_id");
            $table->integer("qteS_prod");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
