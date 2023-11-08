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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('facebook_uri');
            $table->string('twitter_uri');
            $table->string('instagram_uri');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('phone', 11)->unique();
            $table->string('address');
            $table->string('language');
            $table->string('avatar');
            $table->text('biography');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
