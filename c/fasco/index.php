<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = './';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';
include_once $highschool_base . '!master-data.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = '';//メタキーワードの追加
$description = '';//メタディスクリプションの追加 

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
	<img alt="" class="fv_image" src="firstview.jpg">
	<hgroup>
		<h1 class="catch"><?= $co['catch_copy'] ?></h1>
		<p class="fv-tag"><?= INDUSTRIES[$co['industry'][0]] ?></p>
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
		地域やお客様と、一緒に成長していく会社
	</h2>
	<p>
		私たちは東御市で、精密板金  のプロとしてものづくりを続けている会社です。<br>
		精密板金は、金属の板をミリ単位の正確さで切ったり曲げたりして、機械や製品の部品をつくる技術です。<br>
		製造業と言っても、ただ機械を動かしているだけではありません。地域のイベントにも積極的に参加し、ワイナリーや牧場といった東御市ならではの産業とのつながりも大切にしながら 、お客様からの「こんなもの作れる？」という声に応える、柔軟な仕事が特徴です。<br>
		自分たちだけでなく、周りも一緒に成長できるような会社を目指しています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="first.jpg" alt="" class="fs show">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="first.jpg" alt="" class="fs">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
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
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		工場には、昔から使われている機械と、最新の機械がそろっています。長年使われている機械はちょっとクセがあって、扱うにはコツが必要。でも、それを簡単そうに使いこなす姿は、まさに職人です！<br>
		とはいえ、最初から難しいことを任されるわけではありません。3か月の研修期間では、ラベル貼りなどの出荷作業や完成した製品の検査といった簡単な仕事から始めます。会社で作っている製品を覚えてきたら、金属を切ったあとのバリ取りや手動での穴あけなど、少しずつステップアップ。この研修期間にしっかりと「ものづくりの土台」をつくることで、のちのち、技術の幅がぐんと広がっていくそうです。<br>
		また、職場の雰囲気もとても良く、休憩中には趣味の話で盛り上がったり、休日には一緒にゴルフを楽しんだりと、仕事以外でも仲の良い関係ができています。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		金属を、思い通りのカタチに。
	</h3>
	<p>
		私たちは、東御市で板金加工を行っています。<br>
		板金加工とは、図面をもとに金属の板を切ったり、曲げたり、つなげたりして、さまざまな形の製品を作る仕事です。
	</p>
	<div class="images grid-img">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		まずはお客様から届いた図面をもとに、どんな順番で加工するか、どの機械を使うかを考えながら、実際の作業に必要な細かい図面や作業指示書を作成します。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		加工は、切断・曲げ・溶接・仕上げの4つの工程に分かれています。
	</p>
	<h3>
		『切断』
	</h3>
	<p>
		ブランクと呼ばれる工程です。ここでは、レーザー加工機やパンチプレス加工機を使って、金属板から必要な形を切り抜きます。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<p>
		直線が多い製品はプレス、曲線の多い製品はレーザー、といった感じで、作るものに合わせて機械を使い分けています。
	</p>
	<div class="images grid-img">
		<img src="introduce6.jpg" class="scene" alt="">
		<img src="introduce7.jpg" class="scene" alt="">
		<img src="introduce8.jpg" class="scene" alt="">
	</div>
	<p>
		切断後にできる「バリ」と呼ばれるギザギザした部分を削る作業も大切です。やすりで削ったり、 専用の機械に通したりして、キレイに整えていきます。
	</p>
	<div class="images grid-img">
		<img src="introduce9.jpg" class="scene" alt="">
		<img src="introduce10.jpg" class="scene" alt="">
		<img src="introduce11.jpg" class="scene" alt="">
	</div>
	<h3>
		『曲げ』
	</h3>
	<p>
		ベンドと呼ばれる工程です。切断した金属を、曲げ加工機を使って立体的な形にしていきます。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		直角に曲げるだけでなく、円錐や段差のある形など、製品によってさまざまな曲げ方があり、高い技術が求められます。
	</p>
	<div class="images">
		<img src="introduce12.jpg" class="scene" alt="">
	</div>
	<p>
		ちょっとした力加減で仕上がりが変わる、奥の深い工程です。
	</p>
	<div class="images">
		<img src="introduce13.jpg" class="scene" alt="">
		<img src="introduce14.jpg" class="scene" alt="">
	</div>
	<h3>
		『溶接』
	</h3>
	<p>
		切断や曲げでできたパーツをつなぎ合わせる工程です。製品の厚さや用途によって、TIG溶接やガス溶接、スポット溶接などを使い分けます。
	</p>
	<div class="images">
		<img src="introduce15.jpg" class="scene" alt="">
	</div>
	<p>
		キレイな溶接を行うためには、切断や曲げが正確であることが大前提。しかし、人の手で作業しているものなので、ときにはズレがあることもあります。<br>
		そこで、溶接工程でも製品の大きさをしっかり測り、ハンマーなどで微調整して整えることが大切です。
	</p>
	<div class="images grid-img">
		<img src="introduce16.jpg" class="scene" alt="">
		<img src="introduce17.jpg" class="scene" alt="">
		<img src="introduce18.jpg" class="scene" alt="">
	</div>
	<h3>
		『仕上げ』
	</h3>
	<p>
		加工最後の工程です。ここでは、グラインダーやバフと呼ばれる道具を使って、溶接部分を削ったり磨いたりして見た目を整えます。
	</p>
	<div class="images">
		<img src="introduce19.jpg" class="scene" alt="">
		<img src="introduce20.jpg" class="scene" alt="">
	</div>
	<p>
		1枚目の写真のように、溶接した部分は黒く焼けてしまします。それを2枚目のようにキレイにしていくのが、最後の仕上げです。<br>
		特に力を入れているのが、ステンレス製品の洗浄。「酸洗い」と「水洗い」で、鉄粉や油分を完全に取り除き、手作業で丁寧に拭き上げていきます。
	</p>
	<div class="images">
		<img src="introduce21.jpg" class="scene" alt="">
		<img src="introduce22.jpg" class="scene" alt="">
	</div>
	<p>
		この作業のおかげで、サビを防ぐことができます。食品工場など、厳しい衛生管理が求められる現場でも安心して使っていただけるように、最後までこだわっています。
	</p>
	<h3>
		まずは会社を知ることから
	</h3>
	<p>
		入社後は、すぐに難しい加工をするわけではありません。<br>
		まずはラベル貼りなど出荷作業の手伝いからスタートして、どんな製品を作っているのかを知ってください。
	</p>
	<div class="images grid-img">
		<img src="fourth.jpg" class="scene" alt="">
		<img src="introduce24.jpg" class="scene" alt="">
		<img src="introduce25.jpg" class="scene" alt="">
	</div>
	<p>
		それから、バリ取りや穴あけなど、簡単な作業から少しずつ覚えていきます。<br>
		図面の読み方も、一から丁寧に教えるので安心してください。普通科出身の先輩たちは、半年ほどで読めるようになりました。
	</p>
	<div class="images">
		<img src="introduce26.jpg" class="scene" alt="">
		<img src="introduce27.jpg" class="scene" alt="">
	</div>
	<p>
		機械を操作できるようになるまでに約3か月、1つの工程を1人で任されるようになるには約3年かかります。焦らず、こつこつと地道に頑張れる人に向いていると思います。<br>
		将来的には、「工場鈑金技能士」という国家資格の取得を目指すこともできます。
	</p>
	<h3>
		0.02ミリの極薄製品から、2メートル超えの大型製品まで
	</h3>
	<p>
		実は東信地域には、板金加工の会社が多いんです。<br>
		そんな他社との違いは、0.02ミリほどの薄い製品から、2メートル超えの大きな製品まで対応できる「守備範囲の広さ」です。
	</p>
	<div class="images">
		<img src="introduce28.jpg" class="scene" alt="">
		<img src="introduce29.jpg" class="scene" alt="">
	</div>
	<p>
		手掛けている製品は毎月約1700種類、約9000点にもなります。全く同じ製品を作ることはほとんどなく、日々新しい製品に挑戦できるのが特徴です。<br>
		学校の授業で棚を作ったり、休日にプラモデルを組み立てるのを楽しんだり。そういった「ものづくり」が好きな人を歓迎します！
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce28.jpg" alt="">
				</div>
				<hgroup>
					<h3>シム板</h3>
					<p>
						厚さ0.02ミリのシム板。金型の補修などに使われます。
					</p>
				</hgroup>
			</div>
			<p>シム板</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>軸部カバー</h3>
					<p>
						産業用機械の回転部を保護するためのカバーです。<br>
						丸いななめの部分は、曲げて作っています。どうやって作っているかわかりますか？   
					</p>
				</hgroup>
			</div>
			<p>軸部カバー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="first.jpg" alt="">
				</div>
				<hgroup>
					<h3>配電盤</h3>
					<p>
						電気で動く装置の制御部分を組み込む箱です。<br>
						左上の１辺がR形状になっています。このカーブを作るのに、手作業で確認しながら慎重に作業を行います。   
					</p>
				</hgroup>
			</div>
			<p>配電盤</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce29.jpg" alt="">
				</div>
				<hgroup>
					<h3>防音カバー</h3>
					<p>
						縦2メートル、横2メートルほどの大型製品。<br>
						側面の板と天板が、ボルトで組み立てられるようになっています。<br>
						溶接すると歪んでしまうこともあるので、ぴったり合うように作るのが腕の見せ所です。 
					</p>
				</hgroup>
			</div>
			<p>防音カバー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business5.jpg" alt="">
				</div>
				<hgroup>
					<h3>デザイン看板 </h3>
					<p>
						お店の看板や結婚式のウェルカムボードなど、さまざまなデザイン看板を手掛けています。今年の東御ワインフェスタでも、13軒ほどの看板を製作しました。<br>     
						中の模様と文字が浮いているように見えますよね。『a』や『o』の くり抜かれた部分をどうやって浮かせているのか、写真を見て想像してみてください。
					</p>
				</hgroup>
			</div>
			<p>デザイン看板 </p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business6.jpg" alt="">
				</div>
				<hgroup>
					<h3>ワイナリーで使用する道具</h3>
					<p>
						ワインを混ぜる棒やフィルターなど、ワインを作るために必要な道具を製造しています。バリがなくて使いやすいと好評です。<br>
						毎年行われている、東御ワインフェスタにも出店しています。
					</p>
				</hgroup>
			</div>
			<p>ワイナリーで使用する道具</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>50</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>113</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1961</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.01, 'caption' => '取得者無し', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 90, 'caption' => '新卒9', 'color' => '#2378C7'],
						[ 'value' => 10, 'caption' => '中途1', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => '男性：9', 'color' => '#0062B5'],
						[ 'value' => 10, 'caption' => '女性：1', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 10, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 20, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 30, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 40, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 100, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 40, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 87, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="office.jpg" alt="" class="scene">
	<dl class="speclist">
		<div>
			<dt>会社名</dt>
			<dd><?= $co['company_name'] ?></dd>
		</div>
		<div>
			<dt>業種</dt>
			<dd><?= INDUSTRIES[$co['industry'][0]] ?></dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>産業機械</li>
					<li>工作機械</li>
					<li>建設機械等各種機械のフレーム</li>
					<li>架台の製作及び大型NC機械</li>
					<li>マシニングセンターによる金属の機械加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>内藤央</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>16名（男性 11名／女性 5名、役員、パート・アルバイト含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3217.3819080239614!2d138.46759807650105!3d36.254505972407784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dcb5aeb822259%3A0xbdfb0d798128c345!2z5YaF6Jek5bel5qWt5omA!5e0!3m2!1sja!2sjp!4v1738231241938!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0267-67-1800</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://sakucity-industrialpark.com/naitou/">https://sakucity-industrialpark.com/naitou/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>仕事はゲームと一緒！？</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">内藤央</span></figcaption>
		</figure>
		<p>
			みなさんは、初めてスマホを使ったときや新しいゲームを始めたとき、「難しかったらどうしよう」と思ったことがありますか？「どんなことができるのかな」とわくわくした人が多いのではないでしょうか。<br>
			簡単すぎるゲームが物足りないのと同じで、少しずつ挑戦しながらレベルアップしていくのが楽しいですよね。
		</p>
		<p>
			実は、仕事もこれと似ています。ゲームのチュートリアルのように1つずつ新しいスキルを身につけながら挑戦を重ねることでどんどん成長していけます。機械の操作方法や溶接のコツを学び、自分の「レベル」を上げていけば、さらに面白いことに挑戦できます。<br>
			一緒にスキルを高め合える仲間たちが、あなたを待っています！ 
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
            <dd>
				<ul>
						<?php 
						if (is_array($plan['date'])) {
								foreach ($plan['date'] as $date) {
										if (is_array($date)) { 
											echo "<li>" . $date['name'] . "</li>";
										}
								}
						} else {
								echo "<li>" . $plan['date'] . "</li>";
						}
						?>
				</ul>
            </dd>
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
			<a href="<?= $company_base ?>job_kinzoku/">
				<figure>
					<img src="<?= $company_base ?>job_kinzoku/firstview.jpg" alt="">
					<figcaption>金属加工</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_yousetsu/">
				<figure>
					<img src="firstview.jpg" alt="">
					<figcaption>溶接作業</figcaption>
				</figure>
			</a>
		</li>
	</ul>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../../tab.js"></script>
<script src="../../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php //include $base . '../footer.php' ?>
</body>
