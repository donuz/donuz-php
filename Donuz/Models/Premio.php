<?php
namespace Donuz\Models;

use Donuz\Curl;

class Premio
{
    /**
     * @param null $order
     * @param null $limit
     *
     * @return mixed
     */
    public function getRewards($order = null, $limit = null)
    {
        return Curl::get('premio/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token, 'Order: ' . $order, 'Limit: ' . $limit]);
    }

    /**
     * @param      $idFilial
     * @param null $order
     * @param null $limit
     *
     * @return mixed
     */
    public function getRewardByBranch($idFilial, $order = null, $limit = null)
    {
        $data = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'filial' => $idFilial];

        return Curl::post('premio', ['Token: ' . Curl::$token, 'Order: ' . $order, 'Limit: ' . $limit], $data);
    }

    /**
     * @param      $tag
     * @param null $order
     * @param null $limit
     *
     * @return mixed
     */
    public function getRewardByTag($tag, $order = null, $limit = null)
    {
        $data = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'tag' => $tag];

        return Curl::post('premio', ['Token: ' . Curl::$token, 'Order: ' . $order, 'Limit: ' . $limit], $data);
    }

    /**
     * @param      $idPremio
     * @param null $order
     * @param null $limit
     *
     * @return mixed
     */
    public function getInfoReward($idPremio, $order = null, $limit = null)
    {
        return Curl::get('premio/' . Curl::$estabelecimento_id . '/' . $idPremio, ['Token: ' . Curl::$token, 'Order: ' . $order, 'Limit: ' . $limit]);
    }

    /**
     * @param      $categ
     * @param null $subcateg
     * @param null $tag
     * @param null $order
     * @param null $limit
     *
     * @return mixed
     */
    public function getRewardByCategory($categ, $subcateg = null, $tag = null, $order = null, $limit = null)
    {
        $data = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'idcategoria' => $categ];
        if (!is_null($subcateg)) {
            $data['idsubcategoria'] = $subcateg;
        }
        if (!is_null($tag)) {
            $data['tag'] = $tag;
        }

        return Curl::post('premio', ['Token: ' . Curl::$token, 'Order: ' . $order, 'Limit: ' . $limit], $data);
    }

    /**
     * @param      $termo
     * @param null $tag
     * @param null $desc
     * @param null $order
     * @param null $limit
     *
     * @return mixed
     */
    public function searchRewards($termo, $tag = null, $desc = null, $order = null, $limit = null)
    {
        $data = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'premio' => $termo];
        if (!is_null($tag)) {
            $data['tag'] = $tag;
        }
        if (!is_null($desc)) {
            $data['descricao'] = $desc;
        }

        return Curl::post('premio', ['Token: ' . Curl::$token, 'Order: ' . $order, 'Limit: ' . $limit], $data);
    }
}