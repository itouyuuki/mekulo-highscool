<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch-copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['meta_keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['meta_desc'] ?? '';


// 現在のURLに一致しない職種を探す
$next_job = null; // 初期値
foreach ($occupation as $key => $job) {
    if ($key !== $last_segment) {
        $next_job = $job; // 最初に見つかった異なる職種をセット
        break; // ループを終了
    }
}


//========================================
// ページのメタデータ
$title = $name . ' - ' . $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';


$description = $meta_desc;

$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/' . $last_segment . '/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
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
		"name": "高卒求人特集",
		"item": "https://works.mekulo.jp/hs/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="firstview.jpg">
    <hgroup>
        <h1 class="catch"><?= $catch_copy ?></h1>
        <p class="fv-tag"><?= $name ?></p>
    </hgroup>
    <?php if (count($occupation) >= 2): // 配列数が2以上か確認し、無い場合は非表示にする ?>
        <a href="<?= $company_base . $next_job['url'] ?>/" class="btn">次の職種を見る</a>
    <?php endif; ?>
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
				品質管理としての役割
			</h3>
			<p>
				目視検査では検査できない、原料の配合量やお湯を入れたときの戻り具合、味やにおい、包装の強度などを確認する仕事です。特に、1時間ごとの基本的な検査や、問題が起きたときの原因究明が重要です。
			</p>
			<div class="images">
				<img src="contents01.jpg" alt="" class="scene">
			</div>
			<p>
				基本的な検査では、1時間ごとにランダムで製品を抜き取り、検査項目にそってチェックしていきます。包装を開けて中身を確認するのは、品質管理ならでは。<br>
				水検査と呼ばれる検査では、水の中に入れたかやくに圧力をかけて包装をパンパンに膨らませ、包装の強度や空気が漏れていないかを確認します。
			</p>
			<div class="images">
				<img src="contents02.jpg" alt="" class="scene">
				<img src="contents03.jpg" alt="" class="scene">
			</div>
			<p>
				検査結果に問題があれば、機械操作スタッフと協力して原因を突き止めます。工場中の製品に関わり、製造スタッフや機械操作スタッフとのやりとりも多い仕事なので、常に工場の中を動き回っています。<br>
				1時間ごとのルーティンを繰り返すことで不良品を未然に防ぎ、品質を安定させることができます。
			</p>
			<div class="images">
				<img src="contents04.jpg" alt="" class="scene">
			</div>
			<p>
				書類の作成も、品質管理の大事な仕事の一つです。スタッフの日報を確認したり、検査結果をまとめたりしながら、取引先に提出する書類を作成します。これらの書類は、製品の品質を証明する大切なものです。
			</p>
			<div class="images">
				<img src="contents05.jpg" alt="" class="scene">
			</div>
			<h3>
				判断力を磨く
			</h3>
			<p>
				まずは研修を受けて、作業の流れやポイント、検査方法を学びます。検査器具の使い方を順番に覚えて、一通りできるようになったら、少しずつ担当する作業を任されます。<br>
				一年くらい経つと、一人で仕事をこなせるようになります。
			</p>
			<div class="images">
				<img src="contents06.jpg" alt="" class="scene">
			</div>
			<p>
				機械の調子によっては、不良品（正常に袋の中にかやくが収まっていないもの）が急に増えてしまうことがあります。その時にラインを止めて調整するべきか、そのまま続行するべきかの判断が難しいですが、その判断ができるようになると一人前になった実感がわいてきます。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
					<li>
				<img src="gallery01.jpg" alt="">
			</li>
        <li>
				<img src="gallery02.jpg" alt="">
			</li>
        <li>
				<img src="gallery03.jpg" alt="">
			</li>
			<li>
				<img src="gallery04.jpg" alt="">
			</li>
			<li>
				<img src="gallery05.jpg" alt="">
			</li>
			<li>
				<img src="gallery06.jpg" alt="">
			</li>
			<li>
				<img src="gallery07.jpg" alt="">
			</li>
			<li>
				<img src="gallery08.jpg" alt="">
			</li>
			<li>
				<img src="gallery09.jpg" alt="">
			</li>
			<li>
				<img src="gallery10.jpg" alt="">
			</li>
				</ul>
				<div class="button left_btn">&lt;</div>
				<div class="button right_btn">&gt;</div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<h2>社員紹介</h2>
			<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="gyoda.jpg" alt="">
				<hgroup>
					<h3>行田さん</h3>
					<p>
						食品関係の短大に通っていました。仕事を探す中で先生と一緒に職場見学に来たのがきっかけで、科の木の仕事に興味を持ちました。<br>
						今は書類をまとめたり、製品に穴が開いていないか確認したり、いろんなことをやっています。1年くらいで一通りの仕事を覚えることができました。<br>
						「ちょっと微妙かな」と感じる製品を判断するのは、今でも大変です。<br>
						休日は家でゆっくり過ごすこともあれば、舞台やコンサートを見に行くこともあります。
					</p>
				</hgroup>
			</div>
			<p>2017年新卒入社<br>行田さん</p>
		</li>
	</ul>
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
							<dd>品質管理スタッフ</dd>
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
							<dd>2名</dd>
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
								162,000円～
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>通勤手当、残業手当</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>年1回</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>年2回</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3カ月（待遇の変更なし）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>あり（60歳）</dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-1101<br>
								長野県上田市下之条42
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>8:15～17:00</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>75分</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>日・祝日・その他、年間休日120日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均8時間</dd>
						</div>
						<div>
							<dt>就業場所における受動喫煙防止の取組</dt>
							<dd>建物内喫煙不可</dd>
						</div>
					</dl>
					<h3>募集・採用に関する情報</h3>
					<dl>
						<div>
							<dt>前年度の採用実績</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>1名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd></dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>8時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>7日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd>役員 33%、管理職 0%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>16年</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>研修制度</dt>
							<dd>〇1か月間の社内研修があります。</dd>
						</div>
						<div>
							<dt>自己啓発支援制度</dt>
							<dd>なし</dd>
		</div>
		<div>
			<dt>メンター制度</dt>
			<dd>なし</dd>
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
        <?php foreach ($occupation as $key => $prop): ?>
            <?php if ($key !== $last_segment): // 現在のURLと異なる職種のみ表示 ?>
                <li>
                    <a href="<?= $company_base . $prop['url'] ?>">
                        <figure>
                            <img src="<?= $company_base . $prop['image'] ?>" alt="">
                            <figcaption><?= $prop['name'] ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</section>			
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
