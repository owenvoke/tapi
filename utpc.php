<?php

namespace pxgamer {
    class UTPC
    {
        public function __construct()
        {
        }

        public static function upload($api_key, $file_path = null)
        {
            if ($file_path !== '' && $file_path !== null) {
                $api_endpoint = 'https://torrentapi.pxgamer.xyz/';
                $postData = [
                    'api_key' => $api_key,
                    'torrent_file' => '@'.$file_path,
                    'mode' => 'u',
                ];

                $ch = curl_init();
                curl_setopt_array(
                    $ch,
                    [
                        CURLOPT_URL => $api_endpoint,
                        CURLOPT_POST => 1,
                        CURLOPT_POSTFIELDS => $postData,
                        CURLOPT_SSL_VERIFYPEER => 0,
                        CURLOPT_SSL_VERIFYHOST => 0,
                        CURLOPT_RETURNTRANSFER => 1,
                    ]
                );
                $result = curl_exec($ch);
                curl_close($ch);

                return $result;
            } else {
                return json_encode(['status' => 'Please include a file path.']);
            }
        }
    }

    $uTP = new \pxgamer\UTPC();
}
