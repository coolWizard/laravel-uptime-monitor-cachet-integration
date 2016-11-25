<?php
return [
    'endpoint' => 'https://demo.cachethq.io/api/v1',
    'token' => 'ChangeMe',
    'enable' => true,
    'issueableEvents' => [
        Spatie\UptimeMonitor\Events\UptimeCheckFailed::class
    ],
    'defaults' => [
        'status' => 1,
        'visible' => 1,
        'component_id' => 1,
        'component_status' => 1,
        'notify' =>1
    ]
];