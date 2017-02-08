<?php

namespace app\Common;

class HttpClient
{
    public function __construct()
    {
    }

    public function send($url, $body)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch,CURLOPT_POST, count($body));

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}