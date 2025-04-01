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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index(); // Foreign key to categories
            $table->string('item_name');
            $table->decimal('price', 8);
            $table->integer('qty');
            $table->timestamps();

            // foreign key referencing categories table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
