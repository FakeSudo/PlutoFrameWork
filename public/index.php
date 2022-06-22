<?php

use FakeSudo\Pluto\Kernel;

require_once __DIR__ . '/../vendor/autoload.php';

Kernel::WebClient(__DIR__)->load();