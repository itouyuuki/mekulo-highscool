<?php
// 企業情報
$co = [
    'slug' => 'kitazawa-doken',
    'company_name' => '北澤土建株式会社',
    'catch-copy' => '自然と向き合い、地元を支える建設会社',
    'industry' => '建設業',
    'post-code' => '〒389-0502',
    'adress' => '長野県上田市武石沖471-1',
    'homepage' => 'https://www.kitazawadoken.co.jp/ ',
    'logo_filename' => 'logo.svg',
    'meta_keyword' => '北澤土建,高卒特集',//meta情報のキーワード
    'meta_desc' => '北澤土建では新卒を募集しています。',//meta情報のディスクリプション
];

// 募集職種
$occupation = [
    'job_dobokusekou' => [
        'name' => '土木施工管理技士',
        'url' => 'job_dobokusekou',
        'catch-copy' => '地域のインフラを支える',
        'work' => '土木施工管理',
        'fv_url' => 'job_kinzoku/firstview.jpg',
        'meta_keyword' => '北澤土建,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => '北澤土建では新卒を募集しています。',//職種のmeta情報のディスクリプション

    ],
    'job_kentikusekou' => [
        'name' => '建築施工管理技士',
        'url' => 'job_kentikusekou',
        'catch-copy' => '街の未来をつくる',
        'work' => '建築施工',
        'fv_url' => 'job_yousetsu/firstview.jpg',
        'meta_keyword' => '北澤土建,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => '北澤土建では新卒を募集しています。',//職種のmeta情報のディスクリプション
    ],
];

// 応募前見学
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年3月21日（金） 9時00分～',//開催日時（表示形式）
        'date_num' => '2025-03-21',//開催日
        'deadline' => '2025-03-10',//募集締め切り日
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
    ],
    [
        'about' => 'オープンファクトリー',
        'date' => '2025年3月22日（土） 13時00分～',
        'date_num' => '2025-03-22',//数字入力？？
        'deadline' => '2025-03-15',//募集締め切り日
        'content' => '応募前見学として参加する方は参加申し込みをしてください。',
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