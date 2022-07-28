<?php

return [
    'tips'                  => "Đó là tất cả những gì chúng tôi biết",
    'http' => [
        '403' => [
            'type'          => 'Access Forbidden',
            'description'   => 'Bạn không có quyền truy cập vào mục này!',
        ],
        '404' => [
        'type'              => 'Not Found',
            'description'   => 'The requested URL was not found on this server.',
        ],
        '419' => [
            'type'          => 'Session Expired',
            'description'   => 'Please refresh this page!',
        ],
        '422' => [
            'type'          => 'Unprocessable Entity',
        ],
        '451' => [
            'type'          => 'Unavailable For Legal Reasons',
            'description'   => 'Access to this resource on the server is denied!',
        ],
        '500' => [
            'type'          => 'Internal Server Error',
            'description'   => 'Something went wrong.',
            'tips'          => "We're looking to see what happened"
        ],
        '503' => [
            'type'          => 'Maintenance Mode',
            'description'   => ':name is now updating or maintaining',
            'tips'          => 'Please visit later'
        ]
    ],
    'alphacome' => [
        'illegal' => [
            'desc'          => "You can't place here!",
            'title'         => 'AlphaCome'
        ],
        'win' => [
            'desc'          => 'AlphaCome Wins!',
            'title'         => 'AlphaCome: Artificial Intelligence'
        ],
        'lose' => [
            'desc'          => 'Player Wins!',
            'title'         => 'AlphaCome: Artificial In-intelligence'
        ],
        'restart'           => "Restart Match",
        'notsupported'      => "Your browser does not support AlphaCome.",
    ],
    'default'               => 'Server Connection Error',
];
