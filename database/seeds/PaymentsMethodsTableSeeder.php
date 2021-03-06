<?php

use Illuminate\Database\Seeder;

class PaymentsMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments_methods')->delete();
        DB::table('payments_methods')->insert([
            0=> [
            "id" =>1,
            "tipoFormaPagamento" => 1,
            "descricao" => 'Dinheiro',
            ],
            1=> [
            "id" =>2,
            "tipoFormaPagamento" => 2,
            "descricao" => 'Transferência Conta Banco do Brasil',
            ],
            2=> [
            "id" =>3,
            "tipoFormaPagamento" => 2,
            "descricao" => 'Transferência Banco Itaú',
            ],
        ]);
    }
}
