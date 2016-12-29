<?php
namespace Donuz\Models;

use Donuz\Curl;

class Configuracao
{
    /**
     * @return mixed
     */
    public function getSettings()
    {
        return Curl::get('configuracao/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token]);
    }
}