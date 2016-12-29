<?php
require 'vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
\Donuz\Curl::$token = getenv('TOKEN');
\Donuz\Curl::$estabelecimento_id = getenv('ESTABELECIMENTO_ID');

class Donuz
{
    public static function category()
    {
        return new \Donuz\Models\Categoria();
    }

    public static function customer()
    {
        return new \Donuz\Models\Cliente();
    }

    public static function scoringCode()
    {
        return new \Donuz\Models\CodigoPontuavel();
    }

    public static function share()
    {
        return new \Donuz\Models\Compartilhar();
    }

    public static function setting()
    {
        return new \Donuz\Models\Configuracao();
    }

    public static function mail()
    {
        return new \Donuz\Models\Emails();
    }

    public static function store()
    {
        return new \Donuz\Models\Estabelecimento();
    }

    public static function branch()
    {
        return new \Donuz\Models\Parceiro();
    }

    public static function point()
    {
        return new \Donuz\Models\Ponto();
    }

    public static function reward()
    {
        return new \Donuz\Models\Premio();
    }

    public static function redeemption()
    {
        return new \Donuz\Models\Resgate();
    }

    public static function balance()
    {
        return new \Donuz\Models\Saldo();
    }
}