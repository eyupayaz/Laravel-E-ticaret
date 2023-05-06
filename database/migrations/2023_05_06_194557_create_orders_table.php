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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("address_id")->references("id")->on("user_addresses");
            $table->bigInteger("total_price");

            $table->enum("shipping",[
                "PENDING",
                "SHIPPED",
                "DELIVERED",
                "RETURNED"
            ]);
            $table->enum("order_status", [
                    "COMPLETED",
                    "ACTIVE",
                    "CANCELLED"
                ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
