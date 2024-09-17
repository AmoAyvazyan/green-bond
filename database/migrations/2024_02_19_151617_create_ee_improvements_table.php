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
        Schema::create('ee_improvements', static function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('parent_id')->nullable()->constrained('ee_improvements');
            $table->string('icon')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('has_quantity')->default(false);
            $table->boolean('has_power')->default(false);
            $table->boolean('has_price')->default(false);
            $table->boolean('has_area')->default(false);
            $table->boolean('has_thickness')->default(false);
            $table->boolean('has_volume')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('ee_improvement_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('ee_improvement_id')->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('description')->nullable();
            $table->unique(['ee_improvement_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ee_improvement_translations');
        Schema::dropIfExists('ee_improvements');
    }
};
