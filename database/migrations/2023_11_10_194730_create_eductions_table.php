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
        Schema::create('eductions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('in');
            $table->string('degree');
            $table->text('description');
            $table->string('started_at');
            $table->string('ended_at');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eductions');
    }
};
