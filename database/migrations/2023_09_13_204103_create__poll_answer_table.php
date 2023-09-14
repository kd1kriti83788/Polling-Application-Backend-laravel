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
        Schema::create('_poll_answer', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('poll_Que_id');
            $table->string('name');
            $table->string('selected_option');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_poll_answer');
    }
};
