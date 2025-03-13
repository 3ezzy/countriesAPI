<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('capital');
            $table->bigInteger('population');
            $table->string('continent');
            $table->string('sub_region')->nullable();
            $table->string('flag_url');
            $table->string('motto')->nullable();
            $table->json('languages')->nullable();
            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};

