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
            $table->string('username');
            $table->string('full_name')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            // $table->string('gender')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('image')->nullable();
            $table->string('skype')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('pin')->nullable();
            $table->integer('user_type');
            $table->string('role')->default('user');
            $table->enum('status',['Active', 'Inactive'])->default('Active');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
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
