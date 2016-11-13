<?php

namespace pxgamer {
    class UTPC
    {
		public static $api_endpoint = 'https://torrentapi.pxgamer.xyz/';
        public function __construct()
        {
        }

        public static function upload($api_key, $file_path = null)
        {
            if ($file_path !== '' && $file_path !== null) {
                $postData = [
                    'api_key' => $api_key,
                    'torrent_file' => '@'.$file_path,
                    'mode' => 'u',
                ];

                $ch = curl_init();
                curl_setopt_array(
                    $ch,
                    [
                        CURLOPT_URL => self::$api_endpoint,
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
		
		public static function download($api_key, $hash)
        {
            echo self::get($api_key, 'f', $hash);
        }
		
		private static function get($api_key, $mode = '', $hash = '')
		{
			$url = self::$api_endpoint . '?api_key=' . $api_key . '&mode=' . $mode . '&id=' . $hash;
			$ch = curl_init();
            curl_setopt_array(
                $ch,
                [
                    CURLOPT_URL => $url,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                ]
            );
            $result = curl_exec($ch);
            curl_close($ch);

            return $result;
		}
    }

    $uTP = new \pxgamer\UTPC();
}
