<?php

namespace app\Common;

class HttpClient
{
    public function __construct()
    {
    }

    public function send($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}