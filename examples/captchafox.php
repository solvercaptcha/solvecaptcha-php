<?php

set_time_limit(610);

require(__DIR__ . '/../src/autoloader.php');

//$argv[1] = YOUR_API_KEY
$solver = new \SolveCaptcha\SolveCaptcha($argv[1]);

try {
    $result = $solver->genericCaptcha([
        'method' => 'captchafox',
        'sitekey' => 'sk_ILKWNruBBVKDOM7dZs59KHnDLEWiH',
        'pageurl'     => 'https://mysite.com/page/with/captchafox',
        'userAgent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
        'proxy'     => [
            'type' => 'HTTPS',
            'uri'  =>  'ub6900fef552505bc-zone-custom-region-bg:ub6900fef552505bT@eu.proxy.2captcha.com:2333',
        ],
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);