<?php

namespace Craft;

$config = [

    'defaultCacheDuration' => 60 * 60, // 1 Hour

    'disableCache' => false,

];

foreach ($config as $key => $value) {
    craft()->config->set($key, $value, 'httpmessagescachemiddleware');
}
