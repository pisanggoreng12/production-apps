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
        Schema::create('preparations', function (Blueprint $table) {
            $table->id('productionid');
            $table->decimal('batch');
            $table->enum('spesies',['SJ','BE','ALB','YF']);
            $table->enum('size',['0.7-0.99','1.0-1.39','1.4-1.79','1.8-2.39','3.4-4.49','4.5-5.99','6.0-8.99','9.0-11.99','12.0-14.99','15.0-17.99','18.0-20.99','21.0-23.99','24.0-26.99','30.0-32.99','33.0-35.99']);
            $table->decimal('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preparations');
    }
};
