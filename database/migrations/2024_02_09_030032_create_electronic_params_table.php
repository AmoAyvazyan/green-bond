<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('electronic_params', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedInteger('electricity_demand_old');
            $table->unsignedInteger('electricity_demand_new');
            $table->unsignedInteger('electricity_demand_a')->nullable();
            $table->unsignedInteger('electricity_demand_a_plus');
            $table->unsignedInteger('electricity_demand_a_2plus');
            $table->unsignedInteger('electricity_demand_a_3plus');
            $table->string('baseline_class')->default('A++');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('electronic_params');
    }
};
