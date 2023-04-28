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
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',100);
            $table->string('description')->nullable();
            $table->string('company', 75)->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('fax',15)->nullable();
            $table->string('email',80)->nullable();
            $table->string('smtpserver',75)->nullable();
            $table->string('smtppassword',15)->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook',100)->nullable();
            $table->string('instegram',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('youtube',100)->nullable();
            $table->text('aboutus',100)->nullable();
            $table->text('contact',100)->nullable();
            $table->text('references',100)->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
