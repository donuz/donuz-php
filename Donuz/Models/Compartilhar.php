<?php
namespace Donuz\Models;

use Donuz\Curl;

class Compartilhar
{
    /**
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function getHash($tokenCliente)
    {
        $data = ['acao' => 'inserir', 'estabelecimento' => Curl::$estabelecimento_id, 'termo' => 'config'];

        return Curl::post('redessociais', ['Token: ' . Curl::$token, '$token-Cliente: ' . $tokenCliente], $data);
    }
}