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
        Schema::create('regions', static function (Blueprint $table) {
            $table->id();
            $table->float('hh_30_year');
            $table->float('hdd_average_apartment');
            $table->float('hdd_average_sfh');
            $table->float('hdd_average_normative');
            $table->timestamps();
        });

        Schema::create('region_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['region_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_translations');
        Schema::dropIfExists('regions');
    }
};
