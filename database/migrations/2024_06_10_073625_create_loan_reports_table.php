<?php

use App\Models\LoanRequest;
use App\Models\MortgageLoanRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('loan_reports', static function (Blueprint $table) {
            $table->id();
            $table->nullableNumericMorphs('reportable');
            $table->unsignedSmallInteger('refinancing_year');
            $table->string('funding_source');
            $table->unsignedSmallInteger('project_category');
            $table->unsignedSmallInteger('product_category');
            $table->decimal('loan_amount', 12);
            $table->decimal('refinanced_amount',12);
            $table->decimal('project_category_component',12)->nullable();
            $table->integer('energy_savings');
            $table->float('co2_reduction');
            $table->string('cert_standard')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        //Create reports for existing loan requests
        LoanRequest::whereNotNull('refinanced_at')
                   ->whereNull('rejected_at')
                   ->get()
                   ->each(fn(LoanRequest $loan) => $loan->update(
                       ['co2_reduction' => $loan->co2_reduction + 0.0000000001]
                   ));
        MortgageLoanRequest::whereNotNull('refinanced_at')
                           ->whereNull('rejected_at')
                           ->get()
                           ->each(fn(LoanRequest $loan) => $loan->update(
                               ['co2_reduction' => $loan->co2_reduction + 0.0000000001]
                           ));
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_reports');
    }
};
