<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ee_improvement_loan_request', static function (Blueprint $table) {
            $table->unsignedBigInteger('ee_loan_request_id');
            $table->foreignId('ee_improvement_id')->constrained('ee_improvements');
            $table->primary(['loan_request_id', 'loan_request_type', 'ee_improvement_id'], 'ee_improvement_loan_request_primary');
            $table->json('data')->nullable();

            $table->foreign('ee_loan_request_id')
                  ->references('id')
                  ->on('loan_request');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ee_improvement_loan_request');
    }
};
