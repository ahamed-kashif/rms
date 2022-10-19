<?php

namespace App\Console\Commands;

use App\Models\Balance;
use App\Models\Invoice;
use App\Models\Project;
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
    private int $balance = 0;
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
        try {
            $this->info('Generating accounts............');
            $projects = Project::generalProjects()->get('id')->toArray();
            $invoices = Invoice::whereIn('project_id', $projects)->orderBy('created_at', 'asc')->get();
            $this->info('..................................................');
            foreach ($invoices as $k => $inv) {
                $this->info('Calculating invoice no: ' . $inv->invoice_no);
                if ($inv->is_checkin) {
                    $this->balance = $this->balance + $inv->amount;
                } else {
                    $this->balance = $this->balance - $inv->amount;
                }
                $this->info('Balance [' . $k . ']:' . $this->balance);
            }
            $this->info('..................................................');
            $this->info('Updating balance...................................');
            Balance::truncate();
            $ub = Balance::create([
                'balance' => $this->balance
            ]);
            $this->info('[' . $ub->created_at . '] BALANCE: ' . $ub->balance);
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
