<?php
namespace App\Fly01\Repositories\Financeiro;

use App\Http\Requests;

use App\Fly01\Models\Financeiro\BillToPay;

use Auth;

use DB;

class BillsToPayRepository
{

  public function listAll()
  {
    return BillToPay::all();
  }

  public function listByBank($bank)
  {
    return DB::table('bills_to_pay')
    ->join('banks', 'bills_to_pay.bank', '=', 'bank.id')
    ->select('bills_to_pay.*', 'banks.bancoNome')
    ->where('bills_to_pay.bank', $bank)
    ->get();
  }

}