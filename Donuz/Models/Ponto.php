<?php
namespace Donuz\Models;

use Donuz\Curl;

class Ponto
{
    /**
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function getPointsExtract($tokenCliente)
    {
        return Curl::get('ponto/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token, 'Token-Cliente: ' . $tokenCliente]);
    }
}