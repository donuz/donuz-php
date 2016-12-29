<?php
namespace Donuz\Models;

use Donuz\Curl;

class Resgate
{
    /**
     * @param $tokenCliente
     * @param $data
     *
     * @return mixed
     */
    public function redeemRewards($tokenCliente, $data)
    {
        $data = array_merge([
            'acao' => 'inserir',
            'estabelecimento' => Curl::$estabelecimento_id
        ], $data);

        return Curl::post('resgate', [
            'Token: ' . Curl::$token,
            '$token-Cliente: ' . $tokenCliente
        ], $data);
    }

    /**
     * @param $idResgate
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function getRedeemption($idResgate, $tokenCliente)
    {
        return Curl::get('resgate/' . Curl::$estabelecimento_id . '/' . $idResgate, [
            'Token: ' . Curl::$token,
            '$token-Cliente: ' . $tokenCliente
        ]);
    }

    /**
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function getRedeemptionsByCustomer($tokenCliente)
    {
        return Curl::get('resgate/' . Curl::$estabelecimento_id, [
            'Token: ' . Curl::$token,
            '$token-Cliente: ' . $tokenCliente
        ]);
    }
}