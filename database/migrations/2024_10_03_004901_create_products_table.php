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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prodname');
            $table->unsignedBigInteger('category_id'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Relasi foreign key
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }

};
