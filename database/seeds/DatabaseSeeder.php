<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        //$this->call(BlogSeeder::class);
        $this->call(PaymentsMethodsTableSeeder::class);
        $this->call(PersonsTableSeeder::class);
        $this->call(FinancialCategoryTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(BillsToPayTableSeeder::class);
        $this->call(BillsToReceiveTableSeeder::class);

    }
}
