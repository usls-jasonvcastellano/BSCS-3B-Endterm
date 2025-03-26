<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesAndItemsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Equivalent to BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('name')->unique(); // VARCHAR(255)
            $table->text('description')->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
        });

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2); // DECIMAL(10, 2)
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null'); // Foreign key with onDelete set null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
        Schema::dropIfExists('categories');
    }
}