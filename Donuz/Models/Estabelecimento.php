<?php
namespace Donuz\Models;

use Donuz\Curl;

class Estabelecimento
{
    /**
     * @return mixed
     */
    public function getInfoStore()
    {
        return Curl::get('estabelecimento/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token]);
    }
}