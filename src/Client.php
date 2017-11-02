<?php

namespace pxgamer\tAPI;

/**
 * Class Client
 * @package pxgamer\tAPI
 */
class Client
{
    const API_BASE = 'https://torrentapi.pxgamer.xyz';

    private $authApiKey = null;

    /**
     * @param $api_key
     * @return bool
     */
    public function setApiAuth($api_key)
    {
        if (!is_string($api_key) || $api_key === '') {
            return false;
        }

        $result = $this->post(
            '/authenticate',
            ['api_key' => $api_key]
        );

        if ($result->authenticated) {
            $this->authApiKey = $api_key;
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function unsetApiAuth()
    {
        $this->authApiKey = null;
        return true;
    }

    /**
     * @param null $file_path
     * @return mixed|object
     */
    public function upload($file_path = null)
    {
        if (!$file_path || !is_string($file_path)) {
            return (object)['status' => 'Please include a file path.'];
        }
        return $this->post('', [
            'api_key' => $this->authApiKey,
            'torrent_file' => '@' . $file_path,
            'mode' => 'u'
        ]);
    }

    /**
     * @param $hash
     * @return mixed|object
     */
    public function download($hash)
    {
        if (!$hash || !is_string($hash)) {
            return (object)['status' => 'Please provide a valid torrent hash.'];
        }
        return self::get('?api_key=' . $this->authApiKey . '&mode=f&id=' . $hash);
    }

    /**
     * @param $endpoint
     * @return mixed
     */
    private function get($endpoint)
    {
        $url = self::API_BASE . $endpoint;
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => 1,
            ]
        );
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    /**
     * @param $endpoint
     * @param $content
     * @return mixed
     */
    private function post($endpoint, $content)
    {
        $url = self::API_BASE . $endpoint;
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => http_build_query($content),
            ]
        );
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
