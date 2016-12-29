<?php
namespace Donuz\Models;

use Donuz\Curl;

class Cliente
{
    /**
     * @param $login
     * @param $password
     *
     * @return mixed
     */
    public function signIn($login, $password)
    {
        $data = ['acao' => 'logar', 'estabelecimento' => Curl::$estabelecimento_id, 'login' => $login, 'senha' => $password];

        return Curl::post('login', ['Token: ' . Curl::$token], $data);
    }

    /**
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function getInfoCustomer($tokenCliente)
    {
        return Curl::get('cliente/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token, '$token-Cliente: ' . $tokenCliente]);
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function signUp($data)
    {
        $data = array_merge(['acao' => 'inserir', 'estabelecimento' => Curl::$estabelecimento_id], $data);

        return Curl::post('cliente', ['Token: ' . Curl::$token], $data);
    }

    /**
     * @param $data
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function updateCustomer($data, $tokenCliente)
    {
        $data = array_merge(['acao' => 'inserir', 'estabelecimento' => Curl::$estabelecimento_id], $data);

        return Curl::post('cliente', ['Token: ' . Curl::$token, '$token-Cliente: ' . $tokenCliente], $data);
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public function forgotPassword($email)
    {
        $data = ['acao' => 'lembrar', 'estabelecimento' => Curl::$estabelecimento_id, 'email' => $email];

        return Curl::post('cliente', ['Token: ' . Curl::$token], $data);
    }

    /**
     * @return mixed
     */
    public function getCustomFields()
    {
        return Curl::get('camposAdicionais/' . Curl::$estabelecimento_id . '/cliente', ['Token: ' . Curl::$token]);
    }
}