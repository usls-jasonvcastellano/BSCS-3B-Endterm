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
        Schema::create(table:'items', callback: function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger(column: 'category_id');
            $table->string(column:'item_name');
            $table->decimal(column: 'price',total: 10,places: 2);
            $table->integer(column: 'qty');
            $table->timestamps();

            $table->foreign(columns: 'category_id')
            ->references(columns: 'id')->on(table: 'items')
            ->onDelete(action: 'CASCADE')->onUpdate(action: 'CASCADE');
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
