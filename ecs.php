<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/app',
        __DIR__ . '/database/factories',
        __DIR__ . '/database/seeders',
    ]);
    $ecsConfig->skip([
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/database/migrations',
        __DIR__ . '/docker-compose',
        __DIR__ . '/public',
        __DIR__ . '/resources',
        __DIR__ . '/storage',
        __DIR__ . '/vendor',
        __DIR__ . '/tests',
        __DIR__ . '/.phpstorm.meta.php',
        __DIR__ . '/_ide_helper.php',
    ]);

    $ecsConfig->lineEnding('\n');

    // this way you can add sets - group of rules
    $ecsConfig->sets([
        // run and fix, one by one
        __DIR__ . '/ecs_rules_laravel_custom_set.php', //SetList::LARAVEL
        SetList::PSR_12,
        SetList::CLEAN_CODE,
    ]);

    // this way you add a single rule
//    $ecsConfig->rulesWithConfiguration([
//        ClassAttributesSeparationFixer::class => ['elements' => ['const' => 'none', 'method' => 'one', 'property' => 'none', 'trait_import' => 'none']],
//    ]);

};
