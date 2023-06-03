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
            $table->integer('product_id');
            $table->string('address');
            $table->string('coupon');
            $table->integer('mrp');
            $table->integer('discount');
            $table->integer('final_amount');
            $table->integer('status')->comment('1:order,2:packed,3:shipped,4:in transit,5:deliverred');
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
