<?php
namespace Donuz\Models;

use Donuz\Curl;

class Saldo
{
    /**
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function getCustomerBalance($tokenCliente)
    {
        return Curl::get('saldo/' . Curl::$estabelecimento_id, [
            'Token: ' . Curl::$token,
            '$token-Cliente: ' . $tokenCliente
        ]);
    }
}