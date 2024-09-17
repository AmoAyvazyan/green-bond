<?php

use App\Models\LoanRequest;
use App\Models\MortgageLoanRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mortgage_loan_requests', static function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable()->index();
            $table->foreignId('pfi_id')->nullable()->constrained('partners');
            $table->foreignId('building_id')->constrained();
            $table->float('area');
            $table->string('apartment_number');
            $table->integer('energy_savings');
            $table->float('co2_reduction');
            $table->string('file')->nullable();
            $table->string('status')->default(LoanRequest::STATUS_PENDING);
            $table->string('founding_source')->nullable();
            $table->timestamp('refinanced_at')->nullable();
            $table->decimal('amount_refinanced', 12,2)->nullable();
            $table->string('loaner_sex')->nullable();
            $table->decimal('loaner_revenue', 12,2)->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->decimal('total_amount', 12, 2)->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortgage_loan_requests');
    }
};
