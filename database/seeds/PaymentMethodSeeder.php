<?php

use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PaymentMethod::create([
            'title' => 'Cash'
        ]);
        \App\Models\PaymentMethod::create([
            'title' => 'Cheque'
        ]);
    }
}
