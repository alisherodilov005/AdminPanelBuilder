<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filliars', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("number");
            $table->longText("subtext")->nullable(true);
            $table->longText("subtext_ru")->nullable(true);
            $table->longText("subtext_en")->nullable(true);
            $table->unsignedBigInteger('region_id')->nullable();
            $table->foreign('region_id',)->references('id')->on('regions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filliars');
    }
};
