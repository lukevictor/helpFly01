<?php
namespace App\Fly01\Classes;

class Fluxo 
{
    public function getPagamentos($inicio, $fim)
    {
        $i = 0;
        while ($i <= 4) {
            $pag[$i]=rand($inicio, $fim);
            $i++; 
        }
        return $pag;
    }

    public function getRecebimentos($inicio, $fim)
    {
        $i = 0;
        while($i <= 4) {
             $rec[$i]=rand($inicio, $fim);
             $i++; 
        }
        return $rec;
    }

    public function getSaldo($rec, $pag)
    {
        $saldo[0] = 0;
        $i = 0;
        $j = 0;
        while($i <= 4) {
            if (!$i)
                $j=1;

            $saldo[$i] = $saldo[$j-1] + $rec[$i] + $pag[$i];

            if (!$i)
                $j=0;

            $i++; 
            $j++;
        }
        return $saldo;
    }

    public function getProjetado($saldo, $rec, $pag)
    {
        return $saldo[4] + $rec[4] + $pag[4];
    }

}