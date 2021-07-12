<?php

use Services\Parser;

require_once __DIR__ . '/../bootstrap.php';

$container = App::getContainerInstance();
/** @var Parser $service */
$service = $container->get(Parser::class);

$themeExternalId = $argv[1] ?? null;
print_r("Start parsed" . PHP_EOL);
$service->parse($themeExternalId);
print_r("Finish parsed" . PHP_EOL);
