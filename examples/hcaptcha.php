<?php

set_time_limit(610);

require(__DIR__ . '/../src/autoloader.php');

$solver = new \SolveCaptcha\SolveCaptcha('YOUR_API_KEY');

try {
    $result = $solver->hcaptcha([
        'sitekey'   => 'bf8ccfbf-6a05-45f6-982a-7a7964c2f50c',
        'url'       => 'https://portalunico.siscomex.gov.br',
        'invisible' => 0,
        'domain'    => 'hcaptcha.com',
        // 'proxy' => [
        //     'type' => 'HTTPS',
        //     'uri'  => 'login:password@IP_address:PORT'
        // ]
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);