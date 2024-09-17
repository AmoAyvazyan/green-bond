<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('improvement_loan_request', static function (Blueprint $table) {
            $table->unsignedBigInteger('nee_loan_request_id');
            $table->index('nee_loan_request_type_index');
            $table->foreignId('improvement_id')->constrained('improvements');
            $table->primary(['loan_request_id', 'loan_request_type', 'improvement_id'], 'improvement_loan_request_primary');
            $table->json('data')->nullable();
            $table->foreignId('loan_request_id')->constrained('loan_requests');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('improvement_loan_request');
    }
};
