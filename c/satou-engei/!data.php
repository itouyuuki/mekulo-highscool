<?php
$co = [
    'slug' => 'naito-kogyousho',
    'image' => 'office.jpg',
    'company_name' => '株式会社 佐藤園芸',
    'catch_copy' => '『植物』で暮らしを豊かにする',
    'industry' => ['D'],
    'post_code' => '381-2247',
    'address' => '長野県長野市青木島3-3-10',
    'homepage' => 'https://sato-engei.co.jp/',
    'logo_filename' => 'logo.svg',
    'latitude' => 36.6164673,//緯度
    'longitude' => 138.1768744,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_zouen' => [
        'name' => '造園',
        'url' => 'job_zouen',
        'catch_copy' => '　',
        'work' => ['463'],
        'fv_url' => 'job_zouen/firstview.jpg',
        'latitude' => 36.6164673,//緯度
        'longitude' => 138.1768744,//経度    
        'MBTI' => 'isfp',    
    ],
    'job_exterior' => [
        'name' => 'エクステリア',
        'url' => 'job_exterior',
        'catch-copy' => '暮らしを彩る',
        'work' => ['463'],
        'fv_url' => 'job_exterior/firstview.jpg',
        'latitude' => 36.6164673,//緯度
        'longitude' => 138.1768744,//経度    
        'MBTI' => 'iNfP'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火）10時00分～、13時30分～', 
                'date' => '2025-07-29',
                'deadline' => '2025-  -  ',//募集締切日
            ],
            [
                'name' => '2025年8月8日（金）10時00分～、13時30分～', 
                'date' => '2025-08-08',
                'deadline' => '2025-  -  ',//募集締切日
            ],
            [
                'name' => '2025年8月20日（水）10時00分～、13時30分～', 
                'date' => '2025-08-20',
                'deadline' => '2025-  -  ',//募集締切日
            ],
        ],
        'catch_copy' => '実際にお客様と合う！？<br>企画営業を体験してみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
    ],
];

// 目次
$toc = [
    'top' => [
        'name' => '企業TOP',
        'icon' => 'company.png',
        'url' => '',
    ],
    'job' => [
        'name' => '募集職種',
        'icon' => 'carrier.png',
        'url' => '',
        'submenu' => $occupation,
		],
	];