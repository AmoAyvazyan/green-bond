<?php

use App\Models\LoanRequest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('renovation_loan_requests', static function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable()->index();
            $table->foreignId('pfi_id')->nullable()->constrained('partners');
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('community_id')->nullable()->constrained('communities');
            $table->foreignId('loaner_id')->nullable()->constrained('loaners');
            $table->json('custom_measures')->nullable();
            $table->string('property_type')->default(LoanRequest::PROPERTY_TYPE_HOUSE);
            $table->float('area');
            $table->float('duration_months');
            $table->string('address');
            $table->integer('energy_savings');
            $table->float('co2_reduction');
            $table->integer('monetary_savings');
            $table->decimal('total_amount', 12, 2)->default(0);
            $table->string('file')->nullable();
            $table->string('type')->default(LoanRequest::TYPE_STANDARD);
            $table->string('status')->default(LoanRequest::STATUS_PENDING);
            $table->string('founding_source')->nullable();
            $table->timestamp('refinanced_at')->nullable();
            $table->decimal('amount_refinanced', 12,2)->nullable();
            $table->string('loaner_sex')->nullable();
            $table->decimal('loaner_revenue', 12,2)->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->string('loan_type')->default(\App\Models\LoanRequest::LOAN_TYPE_RENOVATION);
            $table->decimal('ee_amount', 10, 2)->nullable()->after('total_amount');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('renovation_loan_requests');
    }
};
