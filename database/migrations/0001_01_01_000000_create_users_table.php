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
            // Primary and Index columns
            $table->bigIncrements('id');
            // $table->unsignedInteger('Title')->nullable()->index();
            $table->string('name', 255)->index();
            $table->string('password', 255)->index();
            
            // Account settings
            $table->unsignedTinyInteger('Access')->default(1);
            $table->unsignedTinyInteger('Age')->nullable();
            $table->char('Gender', 1)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('remember_token', 100)->nullable();
         
            // Timestamps and expiration dates
            $table->datetime('DateCreated')->nullable();
            $table->datetime('LastLogin')->nullable();
            
            $table->unsignedInteger('Settings')->default(0);
            
            // IP Addresses
            $table->string('RegisterAddress', 255)->default('0.0.0.0');
            $table->string('SocketAddress', 255)->nullable()->default('0.0.0.0');
            $table->string('WebAddress', 255)->nullable()->default('0.0.0.0');
            
            // Authentication
            $table->string('Token', 17)->nullable();
            $table->text('Avatar')->nullable();
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