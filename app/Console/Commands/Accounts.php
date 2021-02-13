<?php

namespace App\Console\Commands;

use App\Models\Balance;
use App\Models\Invoice;
use Illuminate\Console\Command;

class Accounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates current balance.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $balance = 0;
        if(Balance::count() != 0){
            $balance = Balance::latest()->first()->balance;
        }
        $invoices = Invoice::notChecked()->get();
        if(count($invoices) == 0){
            $this->info('Balance is already updated!');
            return 0;
        }
        try{
            $newBalance = Balance::create([
                'balance' => $balance
            ]);
        }catch (\Exception $e){
            $this->info($e->getMessage());
            return -1;
        }

        foreach($invoices as $invoice){
            if($invoice->is_checkin){
                $balance = $balance + $invoice->amount;
            }else{
                $balance = $balance - $invoice->amount;
            }
            try{
                $invoice->is_checked = 1;
                $invoice->balance_id = $newBalance->id;
                $invoice->update();
                $this->info('Invoice NO.  '.$invoice->invoice_no.' IS CHECKED at '.date('d-m-Y'));
            }catch(\Exception $e){
                $this->info($e->getMessage());
            }
        }
        try{
            $newBalance->balance = $balance;
            $newBalance->update();
            $this->info('Balance updated at '.date('d-m-Y').' Updated balance is:  '.$balance);
        }catch (\Exception $e){
            $this->info($e->getMessage());
        }

        return 0;
    }
}
