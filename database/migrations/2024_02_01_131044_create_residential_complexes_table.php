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
        Schema::create('residential_complexes', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained();
            $table->foreignId('community_id')->nullable()->constrained();
            $table->string('image')->nullable();
            $table->string('developer')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('residential_complex_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('residential_complex_id')->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('address');
            $table->string('address_new')->nullable();
            $table->unique(['residential_complex_id', 'locale'], 'res_complex_translations_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residential_complex_translations');
        Schema::dropIfExists('residential_complexes');
    }
};
