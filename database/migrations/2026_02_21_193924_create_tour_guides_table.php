<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('tour_guides', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('photo');
        $table->text('description');  
        $table->text('details');      
        $table->integer('rating');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('tour_guides');
    }
};
