<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload.php';

return function (array $context) {
    return new Kernel($context['APP_NEW'], (bool) $context['APP_DEBUG']);
};