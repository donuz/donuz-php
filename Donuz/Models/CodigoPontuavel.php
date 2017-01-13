<?php
namespace Donuz\Models;

use Donuz\Curl;

class CodigoPontuavel
{
    /**
     * @return mixed
     */
    public function getFields()
    {
        $data = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'termo' => 'config'];

        return Curl::post('codigoPontuavel', ['Token: ' . Curl::$token], $data);
    }

    /**
     * @param $tokenCliente
     * @param $data
     *
     * @return mixed
     */
    public function insertCode($tokenCliente, $data)
    {
        $data = array_merge(['acao' => 'inserir', 'estabelecimento' => Curl::$estabelecimento_id], $data);

        return Curl::post('codigoPontuavel', ['Token: ' . Curl::$token, 'Token-Cliente:' . $tokenCliente], $data);
    }
}