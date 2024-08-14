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
        Schema::create('brodauct', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('brodact_name');
            $table->string('brodact_company');
            $table->string('brodact_id');
            $table->string('category_id');
            $table->string('image');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brodauct');
    }
};
