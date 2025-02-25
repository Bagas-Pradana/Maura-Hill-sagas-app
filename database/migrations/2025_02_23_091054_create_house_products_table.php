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
        Schema::create('house_products', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('unit')->unique(); // Kolom unit, harus unik
            $table->string('title'); // Kolom title
            $table->text('description'); // Kolom description (text)
            $table->json('specification_list'); // Kolom specification (text)
            $table->json('specification_table'); // Kolom specification_list (json)
            $table->json('images'); // Kolom imagesarray (json)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_products');
    }
};
