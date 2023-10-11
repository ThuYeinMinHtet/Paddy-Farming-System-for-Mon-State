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
        Schema::create('pesticides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           $table->string('image');
           $table->text('use_message');
           $table->text('use_vegetable');
           $table->text('use_amount');
           $table->text('use_advantage');
           $table->integer('paddy_bugs_id');
           $table->string('amount');
           $table->string('type');
           $table->integer('price');
           $table->integer('min');
           $table->integer('max');
           $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesticides');
    }
};
