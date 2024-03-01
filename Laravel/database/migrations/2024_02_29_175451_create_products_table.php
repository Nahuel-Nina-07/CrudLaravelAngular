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
            $table->id('ID_PRODUCTO');
            $table->string('PRODUCTO', 255)->unique();
            $table->text('DESCRIPCION');
            $table->boolean('ESTADO')->default(false);
            $table->unsignedInteger('CANTIDAD');
            $table->unsignedInteger('NRO_VISITAS');
            $table->decimal('PRECIO_REGULAR', 8, 2);
            $table->decimal('PRECIO_PREFERENCIAL', 8, 2);
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
