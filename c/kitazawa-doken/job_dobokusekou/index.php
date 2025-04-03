<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';

$cur_page = 'job_marketing';
$job_title = '土木施工管理';

include_once $company_base . '!data.php';

//========================================
// ページのメタデータ
$title = $job_title . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = '';//TBD

$description = '';//TBD

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/' . $cur_page . '/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?= $keywords ?>">
<?php } ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title_with_site ?>">
<?php if ($description) { ?>
<meta property="og:description" content="<?= $description ?>">
<?php } ?>
<meta property="og:url" content="<?= $canonical_url ?>">
<meta property="og:image" content="<?= $og_image ?>">
<meta property="fb:app_id" content="534360210586966">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
		"@type": "ListItem",
		"position": 1,
		"name": "めくろうワークス",
		"item": "https://works.mekulo.jp/"
	},{
		"@type": "ListItem",
		"position": 2,
		"name": "新卒求人特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $job_title ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $cur_page ?>/"
	}]
}
</script>
</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
		<div class="fv_area">
			<img alt="" class="fv_image" src="firstview.jpg">
			<hgroup>
				<h1 class="catch">
					地域のインフラを支える
				</h1>
				<p class="fv-tag"><?= $job_title ?></p>
			</hgroup>
			<a href="<?= $company_base ?>job_yousetsu/" class="btn">次の職種を見る</a>
		</div>
		<section class="page-nav">
			<a href="#job_detail">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-1.png">
					<p>仕事内容</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
			<a href="#employee_introduction">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-2.png">
					<p>社員紹介</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
			<a href="#recruitment_requirements">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-3.png">
					<p>募集要項</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
		</section>
		<section class="g" id="job_detail">
			<h2>仕事内容</h2>
			<h3>
				工事現場をスムーズに進める指揮官！
			</h3>
			<p>
				　土木工事を行うとき、実際に作業をするのは重機のオペレーターや土木作業員さんたちです。でも、その工事がスムーズに進むように全体を管理するのが「土木施工管理」の仕事です。<br>
				　文化祭の実行委員長を思い浮かべてみてください。みんなの作業の様子を見て回り、把握して支持を出すことで文化祭が成功します。こうした人がいないと、文化祭の準備が間に合わなくなったり、足りないものが出てきたりするかもしれません。施工管理も同じです。現場全体をまとめ、工事がスムーズに進むように職人さんに指示を出すのが役割です。

				　まず、設計図や完成予定日をもとに、どの作業をいつまでに終わらせるかの計画を立てて書類にまとめます。大きな工事だと、ファイル一冊分になることもあります。

				　その計画に合わせて、職人さんに作業の連絡をしたり、必要な材料を発注したりします。工事が始まる前には、作業の拠点となる「現場事務所」という仮設の建物を準備するのも施工管理の仕事です。現場事務所は、作業員さんとの朝礼や休憩にも使われます。

				　工事が始まったら、図面通りに、計画通りに工事が進んでいるかをチェックします。予定通りにいかないこともあるので、そんなときは調整が必要です。

				　施工管理の役割は、「実際につくる人」ではなく「把握してまとめる人」。工事現場を支え、成功へ導く工事の指揮官です！
			<div class="images">
				<img src="../introduce1.jpg" alt="" class="scene">
				<img src="../job_yousetsu/yousetsu1.jpg" alt="" class="scene">
			</div>
			<h3>
				自然を相手にする
			</h3>
			<div class="images">
				<img src="../gomen.jpg" alt="" class="scene">
			</div>
			<p>
				　私たちは、橋や道路、川などの土木工事の施工管理を行っています。特に県や市から依頼される公共工事が多く、自然を相手にするダイナミックな工事が特徴です。

				　土木工事はてんきてんき
			</p>
			<div class="images">
				<img src="firstview.jpg" alt="" class="scene">
			</div>
			<h3>
				小さなところから徐々に挑戦していく
			</h3>
			<p>
				　入社後は、まずは穴を開ける場所に印をつけていくなど、簡単な作業から始めます。一つの加工をマスターしたら、レベルアップして先輩から教わりながら新しい加工に挑戦します。この流れを繰り返し、経験を積み重ねることで、できる仕事を増やしていきます。
			</p>
			<p>
				　当社で働いている多くの社員は、未経験からのスタートなので、最初は何もわからないのが当たり前です。こうやって教え合いながら経験を積んでいくことで、将来的には、図面を見ただけで加工の順序や方法を考えられるようになります。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
<?php
foreach ($scenery as $i) {
	if ($i['disp_order'] != NULL) {
		?><li><img src="<?= $image . $i['filename'] ?>" alt=""><?php
		if ($i['subtitle'] != NULL) {
			?><div class="caption"><?= h($i['subtitle']) ?></div><?php
		}
		?></li><?php
	}
}
?>
					</ul>
					<div class="button left_btn"><img src="<?= $base ?>left.png" alt=""></div>
					<div class="button right_btn"><img src="<?= $base ?>right.png" alt=""></div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<h2>社員紹介</h2>
			<div class="member-list Lightbox">
				<div class="thumbnails">
					<div class="thumbnail furuya">
						<img src="<?= $highschool_base ?>magnifying-glass.png" class="glass">
					</div>
					<p>2014年 (中途入社)</p>
					<p>浦木さん</p>
				</div>
			</div>
		</section>
		<section class="g requirements" id="recruitment_requirements">
			<h2>募集要項</h2>
			<div class="tabs">
				<button class="tab1">募集要項</button>
				<button class="ta2">キャリア形成</button>
			</div>
			<div class="requirement">
				<div class="content recruitment">
					<h3>募集要項</h3>
					<dl>
						<div>
							<dt>募集職種</dt>
							<dd>溶接作業</dd>
						</div>
						<div>
							<dt>雇用形態</dt>
							<dd>正社員</dd>
						</div>
						<div>
							<dt>学歴上の応募資格</dt>
							<dd>高卒以上、全学部全学科</dd>
						</div>
						<div>
							<dt>応募資格</dt>
							<dd>不問</dd>
						</div>
						<div>
							<dt>募集人員</dt>
							<dd>1名</dd>
						</div>
						<div>
							<dt>選考方法</dt>
							<dd>書類選考、面接</dd>
						</div>
					</dl>
					<h3>採用後の待遇</h3>
					<dl>
						<div>
							<dt>基本給</dt>
							<dd>
								168,000～<br
								>（1か月160時間勤務の場合、残業代別）
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>
								通勤手当 、皆勤手当
							</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>
								あり
							</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>
								あり
							</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3カ月（待遇の変更なし）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>
								あり（60歳）
							</dd>
						</div>
					</dl>
				</div>
				<a href="<?= $company_base ?>apply/#entry" class="btn_entry">
					<img src="<?= $highschool_base ?>flag.png" class="flag">
					<span>応募前見学情報を見る</span>
					<img src="<?= $highschool_base ?>arrow.svg">
				</a>
			</div>
		</section>
		<section class="g nextpage">
			<h2>その他の職種を見てみる</h2>
			<ul class="image_navi">
<?php foreach ($toc['job']['submenu'] as $key => $prop) { 
				if(!($prop['name'] === $job_title)) { ?>
				<li>
					<a href="<?= $company_base . $key . '/' ?> ">
					<figure>
						<img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
						<figcaption><?= $prop['name'] ?></figcaption>
					</figure>
					</a>
				</li>
<?php
				}
			}	
?>			
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
</body>
