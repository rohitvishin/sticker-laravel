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
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('order_id')->comment('mapped with order_item table');
            $table->integer('total_item');
            $table->string('address');
            $table->string('coupon');
            $table->integer('mrp');
            $table->integer('tax');
            $table->integer('discount');
            $table->integer('final_amount');
            $table->integer('shipment_status')->comment('1:pending,2:packed,3:shipped,4:in transit,5:deliverred');
            $table->integer('status')->comment('1:order,2:cancelled,3:refunded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
