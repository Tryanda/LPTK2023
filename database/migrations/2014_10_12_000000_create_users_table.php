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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string("nip")->nullable();
            $table->string("place_of_birth")->nullable();
            $table->date("day_of_birth")->nullable();
            $table->string("status")->nullable();
            $table->string("gender")->nullable();
            $table->string("nidn")->nullable();
            $table->string("file")->nullable();
            $table->string("cabor_id")->nullable();
            $table->string("university")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
