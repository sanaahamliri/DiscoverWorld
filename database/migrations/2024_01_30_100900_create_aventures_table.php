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
        Schema::create('aventures', function (Blueprint $table) {
            $table->idAventure();
            $table->string('description');
            $table->string('photos');
            $table->string('conseils');
            $table->int('date');
            $table->foreignId('idDestination')->constrained('destinations');
            $table->foreignId('idUser')->constrained('users');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aventures');
    }
};
