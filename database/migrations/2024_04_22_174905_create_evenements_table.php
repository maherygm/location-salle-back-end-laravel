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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('types')->nullable();
            $table->string('date_evenement')->nullable();
            $table->string('date_fin')->nullable();
            $table->bigInteger('prix')->nullable();
            $table->boolean('validation')->nullable();
            $table->integer('note_evenement')->nullable();
            $table->bigInteger('client_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
