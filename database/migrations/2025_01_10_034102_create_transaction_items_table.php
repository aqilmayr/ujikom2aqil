<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('product_id')->constrained()->onDelete('cascade');
            $table->interger('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('transaction_items');
    }
};
