<?php
namespace Donuz\Models;

use Donuz\Curl;

class Estabelecimento
{
    /**
     * @param $EstabelecimentoID
     *
     * @return mixed
     */
    public function getInfoStore($EstabelecimentoID)
    {
        return Curl::get('estabelecimento/' . $EstabelecimentoID, ['Token: ' . Curl::$token]);
    }
}