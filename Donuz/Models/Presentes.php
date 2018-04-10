<?php
namespace Donuz\Models;

use Donuz\Curl;

class Presentes
{

    /**
     * @param $tokenCliente
     * @param $idResgate
     *
     * @return mixed
     */
    public function getGift($idResgate, $tokenCliente)
    {
        $headers = array('Token: '. Curl::$token, 'Token-Cliente: '. $tokenCliente);
        $resgate = Curl::get('presente/'.  Curl::$estabelecimento_id  .'/'. $idResgate, $headers);
        return $resgate;
    }
    /**
     * @param $tokenCliente
     * @param $idResgate
     *
     * @return mixed
     */
    public function getGiftInfo( $idResgate, $tokenCliente)
    {
        $headers = array('Token: '. Curl::$token, 'Token-Cliente: '. $tokenCliente);
        $resgate = Curl::get('presente/'. Curl::$estabelecimento_id .'/'. $idResgate, $headers);

        return $resgate;
    }

    /**
     * @param $tokenCliente
     * 
     * @return mixed
     */
    public function getGifts($tokenCliente)
    {
        $headers  = array('Token: '. Curl::$token, 'Token-Cliente: '. $tokenCliente);
        $resgates = Curl::get('presente/'.Curl::$estabelecimento_id, $headers);

        return $resgates;
    }
    /**
     * @param $tokenCliente
     *
     * @return mixed
     */
    public function countGifts($tokenCliente)
    {
        $headers  = array('Token: '. Curl::$token, 'Token-Cliente: '. $tokenCliente);
        $resgates = Curl::get($this->curl->urlApi .'presente/'. Curl::$estabelecimento_id, $headers);

        if($resgates->status == 200)
        {
            return $resgates->total;
        }

        return 0;
    }

}    