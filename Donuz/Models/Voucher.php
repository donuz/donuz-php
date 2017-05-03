<?php

namespace Donuz\Models;

use Donuz\Curl;

class Voucher
{
    /**
     * @param $codigoVoucher
     * @param $statusVoucher
     * @return mixed
     */
    public function updateStatusVoucher($codigoVoucher, $statusVoucher)
    {

        $data = ['acao' => 'editar', 'voucher' => $codigoVoucher, 'status' => $statusVoucher];

        return Curl::post('voucher', ['Token: ' . Curl::$token], $data);
    }
}