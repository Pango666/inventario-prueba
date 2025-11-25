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
            $table->string('name');
            $table->decimal('price',8,1);
            $table->string('sku',50)->unique();
            $table->integer('quantity')->default(0);
            $table->string('image')->nullable();
            $table->enum('presentacion',['botella','comprimidos','inyectables','otros']);
            $table->unsignedBigInteger('laboratory_id');

            $table->foreign('laboratory_id')->references('id')->on('laboratories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
