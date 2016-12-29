<?php
namespace Donuz\Models;

use Donuz\Curl;

class Parceiro
{
    /**
     * @param $tag
     *
     * @return mixed
     */
    public function getBranchByTag($tag)
    {
        $data = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'tag' => $tag];

        return Curl::post('filial', ['Token: ' . Curl::$token], $data);
    }

    /**
     * @return mixed
     */
    public function getBranchs()
    {
        return Curl::get('filial/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token]);
    }

    /**
     * @param $idParceiro
     *
     * @return mixed
     */
    public function getBranchByID($idParceiro)
    {
        return Curl::get('filial/' . Curl::$estabelecimento_id . '/' . $idParceiro, ['Token: ' . Curl::$token]);
    }
}