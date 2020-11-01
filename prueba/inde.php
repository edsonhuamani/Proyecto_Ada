<?php
$client = new \GuzzleHttp\Client();
$res = $client->request('POST', 'https://api.migo.pe/api/v1/dni', [
    'headers' => [
        'Accept' => 'application/json',
    ],
    'json' => [    
        'token' => 'fflctYPJQKAXRPmk8y2iGMtPMZTJL9awzRAGoebkNp3NAjJChIVAweYeNRCa',
        'dni' => '70451069'
    ],
]);
return $res->getBody();