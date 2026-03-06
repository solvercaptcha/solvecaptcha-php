<?php

set_time_limit(610);

require(__DIR__ . '/../src/autoloader.php');

//$argv[1] = YOUR_API_KEY
$solver = new \SolveCaptcha\SolveCaptcha($argv[1]);

$body = base64_encode(file_get_contents(__DIR__ . '/images/temu/body.png'));
$part1 = base64_encode(file_get_contents(__DIR__ . '/images/temu/part1.png'));
$part2 = base64_encode(file_get_contents(__DIR__ . '/images/temu/part2.png'));
$part3 = base64_encode(file_get_contents(__DIR__ . '/images/temu/part3.png'));


try {
    $result = $solver->genericCaptcha([
        'method' => 'temuimage',
        'body'  => $body,
        'part1' => $part1,
        'part2' => $part2,
        'part3' => $part3,
    ]);

} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);

