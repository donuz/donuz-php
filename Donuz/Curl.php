<?php

namespace Donuz;

class Curl
{
    public static $token;
    public static $estabelecimento_id;

    private static $base_url = 'http://www.donuz.co/api/v1/';
    private static $curl;

    private static function validaParameters($url, $headers, $data = null)
    {
        if (!filter_var(self::$base_url . $url, FILTER_VALIDATE_URL) === true) {
            throw new \Exception('A URL informada é inválida');
        }

        if (!is_array($headers)) {
            throw new \Exception('O Header deverá ser informado como Array');
        }

        if (empty($headers)) {
            throw new \Exception('É necessário informar um HEADER');
        }

        if (!is_null($data) && !is_array($data)) {
            throw new \Exception('Os dados deverão ser informados como Array');
        }
    }

    private static function setCurlInit()
    {
        self::$curl = curl_init();
    }

    private static function setUrl($url)
    {
        curl_setopt(self::$curl, CURLOPT_URL, self::$base_url . $url);
    }

    private static function setHeaders($headers)
    {
        curl_setopt(self::$curl, CURLOPT_HTTPHEADER, $headers);
    }

    private static function setData($dados)
    {
        curl_setopt(self::$curl, CURLOPT_POST, true);
        curl_setopt(self::$curl, CURLOPT_POSTFIELDS, json_encode($dados));
    }

    private static function curlSettings()
    {
        curl_setopt(self::$curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(self::$curl, CURLOPT_FOLLOWLOCATION, true);
    }

    private static function execute()
    {
        return curl_exec(self::$curl);
    }

    private static function finishCurl()
    {
        curl_close(self::$curl);
    }

    private static function returnoRequest($response)
    {
        return json_decode($response);
    }

    public static function post($url, $headers, $dados = null)
    {
        try {

            self::validaParameters($url, $headers, $dados);

            self::setCurlInit();
            self::setUrl($url);
            self::setHeaders($headers);
            self::setData($dados);
            self::curlSettings();
            $output = self::execute();
            self::finishCurl();

        } catch (\Exception $e) {
            return self::returnoRequest([
                'error' => $e->getMessage()
            ]);

        }

        return self::returnoRequest($output);
    }

    public static function get($url, $headers)
    {
        try {
            self::validaParameters($url, $headers);

            self::setCurlInit();
            self::setUrl($url);
            self::setHeaders($headers);
            self::curlSettings();
            $output = self::execute();
            self::finishCurl();

        } catch (\Exception $e) {
            return self::returnoRequest([
                'error' => $e->getMessage()
            ]);
        }

        return self::returnoRequest($output);
    }
}

