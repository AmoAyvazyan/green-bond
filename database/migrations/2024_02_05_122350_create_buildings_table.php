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
        Schema::create('buildings', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('complex_id')->constrained('residential_complexes')->cascadeOnDelete();
            $table->string('energy_passport')->nullable()->comment('pdf');
            $table->string('ee_class');
            $table->float('hdd')->comment('Heating Degree Days');
            $table->integer('floors')->comment('Number of floors');
            $table->float('surface_area')->comment('Total surface area of the building in m²');
            $table->integer('heated_volume')->comment('Heated volume of the building in m³');
            $table->float('heating_ventilation_pf',8,4)->comment('A calculated specific performance factor for heating and ventilation in heating season in W/m³∙°C');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('building_translations', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('title');
            $table->unique(['building_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_translations');
        Schema::dropIfExists('buildings');
    }
};
