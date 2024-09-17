<?php

namespace App\Console\Commands;

use App\Models\LoanRequest;
use Illuminate\Console\Command;

class UpdateEeAmountOfLoanRequestsCommand extends Command
{
    protected $signature = 'generate:ee-amounts';

    protected $description = 'Set ee_amount column of loan requests';

    public function handle(): void
    {
        $this->info('Generating EE amounts...');

        $loanRequests = LoanRequest::with('eeImprovements')->get();

        /** @var LoanRequest $loanRequest */
        foreach ($loanRequests as $loanRequest) {
            $eeAmount = 0;
            foreach ($loanRequest->eeImprovements as $improvement) {
                $appliedData = json_decode($improvement->pivot->data, true);
                $eeAmount += (float) (($appliedData['quantity'] ?: $appliedData['area']) ?: 1)
                    * (int) preg_replace("/[^0-9]/", "", $appliedData['price']);
            }
            $loanRequest->ee_amount = $eeAmount;
            $loanRequest->save();
        }

        $this->info('EE amounts generated successfully');
    }
}
