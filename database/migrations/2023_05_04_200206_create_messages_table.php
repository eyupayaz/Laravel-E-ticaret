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
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',50);
            $table->string('email',70)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('subject',150)->nullable();
            $table->string('message')->nullable();
            $table->string('note',150)->nullable();
            $table->string('status',5)->nullable()->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
