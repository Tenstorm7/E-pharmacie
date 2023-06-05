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
        Schema::create('message_pers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client_id")->onDeleteCascade();
            $table->foreignId("personnel_id")->onDeleteCascade();
            $table->string("conten_smsP");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_pers');
    }
};
