<?php

set_time_limit(130);

require(__DIR__ . '/../src/autoloader.php');

$solver = new \SolveCaptcha\SolveCaptcha([
    'apiKey'	=> 'YOUR_API_KEY',
    'server'	=> 'https://solvecaptcha.com'
]);

try {
    $result = $solver->grid([
        'file'       => __DIR__ . '/images/grid_2.jpg',
        'rows'       =>	3,
        'cols'       =>	3,
        'previousId' =>	0,
        'canSkip'    =>	0,
        'lang'       =>	'en',
     // 'hintImg'    => __DIR__ . '/images/grid_hint.jpg',
        'hintText'   =>	'Select all images with an Orange',
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);
