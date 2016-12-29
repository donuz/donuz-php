<?php
namespace Donuz\Models;

use Donuz\Curl;

class Categoria
{
    /**
     * @return mixed
     */
    public function getCategories()
    {
        return Curl::get('categoria/' . Curl::$estabelecimento_id, ['Token: ' . Curl::$token]);
    }

    /**
     * @param $categoryID - ID da categoria
     *
     * @return mixed
     */
    public function getSubCategories($idCategoria)
    {
        return Curl::get('categoria/' . Curl::$estabelecimento_id . '/' . $idCategoria, ['Token: ' . Curl::$token]);
    }

    /**
     * @param      $categ    - ID da categoria
     * @param null $subcateg - Id da subcategoria
     *
     * @return mixed
     */
    public function getInfoCategory($idCategoria, $idSubcategoria = null)
    {
        $dados = ['acao' => 'buscar', 'estabelecimento' => Curl::$estabelecimento_id, 'categoria' => $idCategoria, 'subcategoria' => $idSubcategoria];

        return Curl::post('categoria', ['Token: ' . Curl::$token], $dados);
    }
}