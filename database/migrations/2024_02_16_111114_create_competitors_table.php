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
        Schema::create('competitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professionId')->references('id')->on('professions');
            $table->string('name', 100);
            $table->string('schoolName', 200)->nullable();
            $table->date('birthDate')->nullable();
            $table->boolean('hostel')->default(true);
            $table->string('avatarUrl', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitors');
    }
};
