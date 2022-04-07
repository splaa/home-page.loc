<?php
return [
    'facade/ignition' =>
        [
            'providers' =>
                [
                    0 => 'Facade\\Ignition\\IgnitionServiceProvider',
                ],
            'aliases' =>
                [
                    'Flare' => 'Facade\\Ignition\\Facades\\Flare',
                ],
        ],
    'fruitcake/laravel-cors' =>
        [
            'providers' =>
                [
                    0 => 'Fruitcake\\Cors\\CorsServiceProvider',
                ],
        ],
    'inertiajs/inertia-laravel' =>
        [
            'providers' =>
                [
                    0 => 'Inertia\\ServiceProvider',
                ],
        ],
    'laravel/breeze' =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Breeze\\BreezeServiceProvider',
                ],
        ],
    'laravel/sail' =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Sail\\SailServiceProvider',
                ],
        ],
    'laravel/sanctum' =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
                ],
        ],
    'laravel/tinker' =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Tinker\\TinkerServiceProvider',
                ],
        ],
    'nesbot/carbon' =>
        [
            'providers' =>
                [
                    0 => 'Carbon\\Laravel\\ServiceProvider',
                ],
        ],
    'nunomaduro/collision' =>
        [
            'providers' =>
                [
                    0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
                ],
        ],
    'tightenco/ziggy' =>
        [
            'providers' =>
                [
                    0 => 'Tightenco\\Ziggy\\ZiggyServiceProvider',
                ],
        ],
];
