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

    /**
     * @param $data
     *
     * @return mixed
     */
    public function insertPoints($data)
    {
        $data = array_merge(['acao' => 'inserir', 'estabelecimento' => Curl::$estabelecimento_id], $data);

        return Curl::post('ponto', ['Token: ' . Curl::$token], $data);
    }
}