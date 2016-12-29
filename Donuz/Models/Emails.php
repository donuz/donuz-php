<?php
namespace Donuz\Models;

use Donuz\Curl;

class Emails
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function sendMail($data)
    {
        $data = array_merge(['acao' => 'enviar', 'estabelecimento' => Curl::$estabelecimento_id], $data);

        return Curl::post('contato', ['Token: ' . Curl::$token], $data);
    }
}