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
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign(['category_id']);

            // Re-add the foreign key with onUpdate
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            // Adding qty column
            $table->integer('qty')->default(0)->after('price');

            //Rename
            $table->renameColumn('name', 'item_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign(['category_id']);

            // Revert to original foreign key without onUpdate
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('CASCADE');

            // Remove qty column
            $table->dropColumn('qty');

            // Rename
            $table->renameColumn('item_name', 'name');
        });
    }
};
