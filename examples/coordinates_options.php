<?php

set_time_limit(130);

require(__DIR__ . '/../src/autoloader.php');

$solver = new \SolveCaptcha\SolveCaptcha([
    'apiKey'	=> $argv[1],
    'server'	=> 'https://solvecaptcha.com'
]);

try {
    $result = $solver->coordinates([
        'file'     => __DIR__ . '/images/grid_2.jpg',
        'language' => 2,
     // 'hintImg'  => __DIR__ . '/images/grid_hint.jpg'
        'hintText' => 'Select all images with an Orange',
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);
