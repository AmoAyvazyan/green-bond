<?php

namespace App\Console\Commands;

use App\Models\LoanRequest;
use Illuminate\Console\Command;

class GenerateUniqueCodesCommand extends Command
{
    protected $signature = 'generate:unique-codes';

    protected $description = 'Command description';

    public function handle(): void
    {
        $loanRequests = LoanRequest::whereNull('code')->get();
        $loanRequests->each(static function ($cRequest) {
            $cRequest->generateUniqueCode();
        });
    }
}
