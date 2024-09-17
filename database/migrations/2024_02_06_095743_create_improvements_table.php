<?php

use App\Models\Improvement;
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
        Schema::create('improvements', static function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('parent_id')->nullable()->constrained('improvements');
            $table->string('icon')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_countable')->default(true);
            $table->string('availability')->default(Improvement::AVAILABILITY_ALL);
            $table->boolean('include_works')->default(false);
            $table->timestamps();
        });

        Schema::create('improvement_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('improvement_id')->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('unit')->nullable();
            $table->unique(['improvement_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('improvement_translations');
        Schema::dropIfExists('improvements');
    }
};
