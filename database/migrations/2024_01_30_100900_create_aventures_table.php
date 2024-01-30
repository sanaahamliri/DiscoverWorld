<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('aventures', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('photos');
            $table->string('conseils');
            $table->integer('date'); 
            $table->foreignId('destination_id')->constrained('destinations'); 
            $table->foreignId('user_id')->constrained('users'); 
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
