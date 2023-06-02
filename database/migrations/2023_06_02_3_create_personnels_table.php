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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string("nom_pers");
            $table->string("prenom_pers");
            $table->string("email_pers");
            $table->string("tel_pers");
            $table->string("dateN_pers");
            $table->string("url_pers");
            $table->string("adress_pers");
            $table->string("qualif_pers");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
