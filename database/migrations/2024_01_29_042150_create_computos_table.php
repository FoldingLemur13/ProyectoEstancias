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
        Schema::create('computos', function (Blueprint $table) {
            $table->id();
            $table->string('nameProduct');
            $table->string('brandProduct');
            $table->string('modelProduct');
            $table->text('descProduct');
            $table->string('productT');
            $table->string('productType');
            $table->string('imagen');
            $table->foreignId('products_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computos');
    }
};
