<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = './';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = $co['meta_keyword'];
$description = $co['meta_desc']; 

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';

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
		"name": "高卒特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	}]
}
</script>

</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_area">
	<img alt="" class="fv_image" src="fv.jpg">
	<hgroup>
		<h1 class="catch"><?= $co['catch-copy'] ?></h1>
		<p class="fv-tag"><?= $co['industry'] ?></p>
	</hgroup>
</div>
<section class="toc">
	<hgroup>
			<h2>目次</h2>
			<div class="click">
				<span></span>
				<span></span>
			</div>
	</hgroup>
	<ol>
		<li class="abu"><a href="#about_company">会社紹介記事</a></li>
		<li class="pro"><a href="#business">私たちのビジネス</a></li>
		<li class="num-d"><a href="#numeric_data">数字で見る当社</a></li>
		<li class="f-pre"><a href="#from_president">社長メッセージ</a></li>
		<li class="com-in"><a href="#company_info">会社概要</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>
		アーチェリー部品や音響機器などの部品を手掛ける町工場
	</h2>
	<p>
		オーパーツの採用ページをご覧いただき、ありがとうございます。<br>
		私たちオーパーツは、上田市住吉でアーチェリーの照準器（サイト）や半導体製造装置に使われる部品、高級オーディオ機器のパネル部品などを手掛けている町工場です。<br>
		試作品として単品モノを製造することもあれば、一か月数千個を製造するような量産を行うこともあり、時には、わずか0.001mm（1000分の1ミリ）のズレすら許されない精密な加工を行うこともあります。<br>
		当社では「総合製造スタッフ」という職種を募集していますが、これは製造する部品・パーツの製造設計からプログラム開発、製造に必要となる治具や工具、機械操作など、ものづくりの全工程を手掛ける技術職です。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="slideshow_01.jpg" alt="" class="fs show">
			<img src="slideshow_02.jpg" alt="" class="sc">
			<img src="slideshow_03.jpg" alt="" class="th">
			<img src="slideshow_04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="slideshow_01.jpg" alt="" class="fs">
			<img src="slideshow_02.jpg" alt="" class="sc">
			<img src="slideshow_03.jpg" alt="" class="th">
			<img src="slideshow_04.jpg" alt="" class="fo">
		</div>
	</div>
	<h3>募集職種</h3>
<div class="job_btn">
    <?php foreach ($occupation as $job): ?>
        <li>
            <a href="<?= $company_base . $job['url'] ?>/">
                <p class="job_name"><?= $job['name'] ?></p>
            </a>
            <div class="arrow">
                <img src="<?= $highschool_base ?>polygon.png" alt="">
            </div>
        </li>
    <?php endforeach; ?>
</div>
	<h3>取材担当者からのポイント！</h3>
	<h4>サンプルテキスト</h4>
	<figure class="portrait">
			<img src="noguchi.png" alt="">
			<figcaption><span class="word">野口</span></figcaption>
		</figure>
	<p>
		世の中には、「とにかく決められた通りに作るだけ」の会社もあります。<br>
		ですが、オーパーツは違う！<br>
		アーチェリーの照準器、高級オーディオ機器…。<br>
		「自分の作ったパーツが、プロのアーチェリーの勝負を左右するかもしれない」<br>
		そんな実感を持ちながら、モノづくりに携われる仕事です。<br>
		幼いころにガンプラを作ったり、ゲーム機を分解してみたり、そんな経験があるにはハマる仕事だと思います。<br>
		大日方社長も、モノづくり大好き人間です。だからこそ、お話してみると絶対に面白いはず！
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		ただ作るだけじゃない！その部品の使われ方まで考え抜く
	</h3>
	<p>
		私たちの仕事は、ただ図面通りに部品を仕上げるだけではありません。<br>
		私たちが目指すのは“最高の性能を発揮する部品”に仕上げ、お客様にご提供することです。<br>
		そのためには、これから製造する部品が「どんな風に使われるのか」「どこまでの精度が必要か」をしっかり考える必要があります。

	</p>
	<div class="images">
		<img src="company1.jpg" class="scene" alt="">
	</div>
	<p>
		多くの場合、お客様からご提供いただく部品の図面には、寸法や形状は詳細に記されていますが、上記のようなことは記されていないことが多いのです。<br>
		例えば、それがスライドする部品だったにも関わらず、「スライドする」という想像を全くせずに部品を作ると、結果的に動きがスムーズでなかったり、途中で引っかかってしまったりする部品になってしまうこともあります。<br>
		だからこそオーパーツでは、一つひとつの部品について、「どう使われるのか」を常に想像し、お客様とコミュニケーションを取りながら、最適な加工方法を見極めることを大切にしています。
	</p>
	<div class="images">
		<img src="slideshow_01.jpg" class="scene" alt="">
		<img src="company3.jpg" class="scene" alt="">
	</div>
	<h3>
		最高の部品に仕上げるために、ドリルや工具にもこだわる
	</h3>
	<p>
		金属に穴を開けたり、削ったりするためには、それぞれの用途に適した市販のドリルや工具を使うのが一般的ですが、私たちのものづくりでは、時に市販の工具だけでは実現できないことがあります。<br>
		そんな時には、自分たちでドリルや工具を設計し、加工を実現しています。
	</p>
	<div class="images">
		<img src="company4.jpg" class="scene" alt="">
	</div>
	<p>
		また、ものづくりには、精度や品質だけでなく、同時に加工スピードも求められます。<br>
		例えば、1,400台分の部品を作る場合、1個あたりの加工時間が1分短縮されるだけで、約23時間も生産時間を短縮できます。<br>
		「どうすれば、より正確に、より速く作れるのか」試行錯誤を重ねながら追求するのも、ものづくりの楽しさです。
	</p>
	<div class="images">
		<img src="company5.jpg" class="scene" alt="">
	</div>
	<h3>
		加工機械を動かす、プログラムにも挑戦できる
	</h3>
	<p>
		加工機械はボタンを押せば勝手に動くわけではありません。<br>
		私たちが機械にこんな動作を、この順序で動いてほしいとプログラムを作ることで初めて動きます。<br>
		オーパーツでは、部品の図面を見て、加工の順序を考え、プログラムを組み、実際に機械を動かして部品を作る。そんなものづくりに必要なすべての仕事に関われます。
	</p>
	<div class="images">
		<img src="company6.jpg" class="scene" alt="">
		<img src="company7.jpg" class="scene" alt="">
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi1.jpg" alt="">
				<hgroup>
					<h3>
						エレベーション（アーチェリー部品）
					</h3>
					<p>
						照準器の高さを上下に微調整するための重要な部品。4面の平行度を0.005mm以内に抑えるという、高精度な加工が求められます。
					</p>
				</hgroup>
			</div>
			<p>エレベーション（アーチェリー部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi2.jpg" alt="">
				<hgroup>
					<h3>サイトボックス（アーチェリー部品）</h3>
					<p>
						アーチェリーの照準器（サイト）に使われる部品を製造しています。
					</p>
				</hgroup>
			</div>
			<p>サイトボックス（アーチェリー部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi3.jpg" alt="">
				<hgroup>
					<h3>アローレスト（アーチェリー部品）</h3>
					<p>
						2cm程度の小さな部品ですが、アーチェリーの矢を安定させ、正確に射るためには欠かせないパーツです。ミクロン単位の精度が求められる難易度が高い部品です。
					</p>
				</hgroup>
			</div>
			<p>アローレスト（アーチェリー部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi4.jpg" alt="">
				<hgroup>
					<h3>フロントパネル（オーディオアンプ部品）</h3>
					<p>
						上田市にある高級音響機器メーカー様のフロントパネルを製造しています。
					</p>
				</hgroup>
			</div>
			<p>フロントパネル（オーディオアンプ部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi5.jpg" alt="">
				<hgroup>
					<h3>薬局梱包機の部品</h3>
					<p>
						薬を梱包する半透明の袋を密封する機械の部品を製造しています。
					</p>
				</hgroup>
			</div>
			<p>薬局梱包機の部品</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1</span>億<span>2</span>千万円</p>
		<p class="year">※2024年11月実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>50</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>11.3</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>10</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>127</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2010</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10</span>日</p>
		</li>
		<li class="circle">
			<p>育児休暇率</p>
			<div class="one">
				<p class="num">対象者なし</p>
			</div>
		</li>
		<li class="circle">
			<p>新卒・中途の比率</p>
			<div class="two">
				<p class="num"><span>0:5</span></p>
			</div>
		</li>
	</ul>
	<ul class="fl_con">
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 40, 'caption' => '男性：2', 'color' => '#0062B5'],
						[ 'value' => 60, 'caption' => '女性：3', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 10, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 20, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 10, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 10, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 85, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 25, 'caption' => '県外', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
	</ul>
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="company.jpg" alt="" class="scene">
	<dl class="speclist">
		<div>
			<dt>会社名</dt>
			<dd><?= $co['company_name'] ?></dd>
		</div>
		<div>
			<dt>業種</dt>
			<dd><?= $co['industry']?></dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>世界で使用されるアーチェリーの照準器やアローレストや、高級オーディオ機器から歯科医療機器、調剤薬局向け機器の部品製造など</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>大日方 新治</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>5名（2025年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd><?= $co['post-code']?><br><?= $co['adress']?><br>
				
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-75-9702</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd>なし</dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="word">大日方 新治</span></figcaption>
		</figure>
		<p>
			オーパーツは、ただ機械を動かして部品を作る会社ではありません。<br>
			私たちが目指すのは、「使う人のことまで考えた最高のものづくり」です。
		</p>
		<p>
			例えば、アーチェリーの部品。<br>
			メーカー様から預かった図面通りに作るだけでは、本当に使いやすいものにはなりません。選手がどんな動きをするのか、どんな精度が必要なのかを考え、細かな調整を加える。そうやって、自分の手で世界に通じる部品を生み出していくのです。<br>
			最初は何もわからなくても大丈夫。ものづくりが好きな人、自分の手で世界に通じる技術を身につけたい人、オーパーツで”最高のものづくり”にチャレンジしてみませんか？
		</p>
	</div>
</section>
<div class="visit content">
    <h2>応募前見学について</h2>
    <dl class="speclist">
        <?php foreach ($visit as $plan): ?>
        <div class="visit-item">
            <h3><?= $plan['about'] ?>について</h3>
						<div>
							<dt>開催日</dt>
							<dd><?= $plan['date'] ?></dd>
						</div>
						<div>
							<dt>内容</dt>
							<dd><?= $plan['content'] ?></dd>
						</div>
        </div>
        <?php endforeach; ?>
    </dl>
	<a href="apply/#entry" class="flag_btn_entry">
		<img src="<?= $highschool_base ?>flag.png" class="flag">
		<span>
			就活前に会社を見てみよう!<br>
			応募前見学
		</span>
		<img src="<?= $highschool_base ?>arrow.svg">
	</a>
</div>
<section class="content" id="job_list">
	<h2>募集職種</h2>
	<ul class="image_navi">
		<li>
			<a href="<?= $company_base ?>job_general-manufacturing/">
				<figure>
					<img src="job-gm.jpg" alt="">
					<figcaption>総合製造職</figcaption>
				</figure>
			</a>
		</li>
	</ul>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
