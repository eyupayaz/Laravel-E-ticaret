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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',100);
            $table->string('description')->nullable();
            $table->string('image', 75)->nullable();
            $table->foreignId('category_id')->references("id")->on("categories")->cascadeOnDelete();
            $table->foreignId('user_id')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('tax')->default(18);
            $table->longText('detail')->nullable();
            $table->string('slug',80)->nullable();
            $table->enum("status", ["ACTIVE","PASSIVE"]);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
