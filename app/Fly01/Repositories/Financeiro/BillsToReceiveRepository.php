<?php
namespace App\Fly01\Repositories\Financeiro;

use App\Http\Requests;

use App\Fly01\Models\Financeiro\BillToReceive;

use Auth;

use DB;

class BillsToReceiveRepository
{

  public function listAll()
  {
    return DB::table('bills_to_receive')
    ->join('banks', 'bills_to_receive.bank', '=', 'banks.id')
    ->select('bills_to_receive.*', 'banks.bancoNome')
    ->get();
  }

  public function listByBank($bank)
  {
    return DB::table('bills_to_receive')
    ->join('banks', 'bills_to_receive.bank', '=', 'banks.id')
    ->join('person', 'person.id', '=', 'bills_to_receive.person')
    ->select('bills_to_receive.*', 'banks.bancoNome', 'person.name')
    ->where('bills_to_receive.bank', $bank)
    ->get();
  }

}
