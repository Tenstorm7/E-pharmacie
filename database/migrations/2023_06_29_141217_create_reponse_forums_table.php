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
        Schema::create('reponse_forums', function (Blueprint $table) {
            $table->id();
            $table->string('reponseforum');
            $table->foreignId("message_forums_id")->onDeleteCascade();
            $table->foreignId("user_id")->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponse_forums');
    }
};
