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
		誠実に、地域とともに成長する
	</h2>
	<p>
		上田市武石にある建設会社で、主に土木事業と建築事業の管理業務を担当しています。<br>
		90年以上にわたり、地域の道路や橋などのインフラ整備、公民館や幼稚園などの建物の建設に取り組んできました。<br>
		市街地での工事ももちろんありますが、自然の中での工事が多いのが特徴です。
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
	<h4>知れば知るほど面白い！</h4>
	<figure class="portrait">
			<img src="sato.png" alt="">
			<figcaption><span class="word">佐藤 愛華</span></figcaption>
		</figure>
	<p>
		　施工管理の仕事では、職人さんとの打ち合わせが欠かせません。打ち合わせでは専門用語がたくさん出てくるので、理解するためには日々の勉強が必要です。<br>
		　わからない言葉をそのままにしてしまうと、職人さんとの意思疎通がうまくいかなくなることもあります。そのため、少しでも気になることや知らない言葉があれば、その場で質問することが大切です。北澤土建の社員さんは勉強熱心な人ばかりで、先輩や職人さんも優しく教えてくれます。<br>
		　施工管理の仕事は、知れば知るほど面白くなる仕事です。現場での経験を重ねることで、どんどん知識が増えていくのも、この仕事の大きな魅力です。 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		地域になくてはならない仕事
	</h3>
	<p>
	    　私たちは、主に土木工事と建築工事の施工管理を行っています。
	    　施工管理の仕事を簡単に説明すると、工事現場がスムーズに進むように『工事全体を管理する』仕事です。具体的には、完成までの計画を立てたり、現場で指示を出したり、役所に書類を提出したりします。 
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
	    　工事の期間中は、工事現場近くに建てられた「現場事務所」と呼ばれる仮設の建物で仕事を行います。タイムカードはスマホで管理しているので、会社に行くことはほとんどありません。<br>
		　現場事務所では、その日の作業内容の確認や図面の作成、工事の進み具合の確認・調整などを行います。
	</p>
	<div class="images grid-img">
		<img src="job_yousetsu/yousetsu2.jpg" class="scene" alt="">
		<img src="job_yousetsu/yousetsu3.jpg" class="scene" alt="">
		<img src="job_yousetsu/yousetsu1.jpg" class="scene" alt="">
	</div>
	<p>
		　施工管理で大切なのは、「いかに周りの信頼を獲得し、動かしていくことができるか」です。
	    　周りを巻き込んで引っ張っていくのが得意な人、自然と人が集まってくるタイプの人、コツコツ努力するのが好きな人。信頼を獲得する方法は一つではなく、同じ施工管理技士でも性格は人それぞれです。
	    　あなたらしさを活かして、施工管理の仕事をやってみませんか？
	</p>
	<div class="images">
		<img src="fukitsuke.jpg" class="scene" alt="">
	</div>
	<h3>
		縁の下のヒーロー
	</h3>
	<p>
	    　大きな災害が起きたとき、真っ先に被災地に向かうのは誰か知っていますか？ <br>
		　消防や自衛隊…と思うかもしれませんが、実は一番に現場へ駆けつけるのは建設業の人たちなんです！
	</p>
    <p> 　令和元年の台風19号では、災害後すぐに、橋が流されて孤立した集落に住む糖尿病のおばあさんを病院へ運ぶために、鉄骨で仮設の橋を架けたことも。 
	    　その後も、橋や道路の修繕を県・市町村から依頼され、緊急対応に全力を注ぎました。
        　陥没した道路を直し、土砂を取り除き、緊急車両が通れるようにする。その結果、消防や救急が安全に救助活動を行うことができるのです。
        　普段は街をつくり、いざという時は命を守るために動く──建設業はまさに、縁の下のヒーローです！
	</p>
	<h3>
		最先端の技術
	</h3>
    <p>
	    　建設業と聞くと、「肉体労働で過酷な仕事」というイメージはありませんか？<br>
        　確かに昔はそうでした。 
        　しかし今では、最新技術の導入により、働き方が大きく変わっています。
	</p>
    <p>
	    　例えば、ドローンを使うことで測量の時間が今までの半分以下に短縮され、今まで入れなかった場所も簡単に測ることができます。さらに、ICT技術を活用することで、機械に指示を出すだけで穴を掘ったり、測量結果を自動でまとめたりできるんです。
	</p>
	<p>
		　こうした技術の進歩により作業者の負担が減り、女性も多く活躍する業界になっています。
	    　『建設業＝きつい仕事』というイメージは、もう昔の話。
	    　今は、最新技術を駆使したかっこいい仕事です！
	</p>	
	</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="firstview.jpg" alt="">
				<hgroup>
					<h3>学校</h3>
					
				</hgroup>
			</div>
			<p>学校</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="gomen.jpg" alt="">
				<hgroup>
					<h3>体育館</h3>
					
				</hgroup>
			</div>
			<p>体育館</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="anaake.jpg" alt="">
				<hgroup>
					<h3>自治センター</h3>
					
				</hgroup>
			</div>
			<p>自治センター</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="fukitsuke.jpg" alt="">
				<hgroup>
					<h3>橋</h3>
					
				</hgroup>
			</div>
			<p>橋</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="robot.jpg" alt="">
				<hgroup>
					<h3>護岸</h3>
					
				</hgroup>
			</div>
			<p>護岸</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="fukitsuke.jpg" alt="">
				<hgroup>
					<h3>道</h3>
					
				</hgroup>
			</div>
			<p>道</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>13</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>48</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>17</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>10</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>120</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1933</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10</span>日</p>
		</li>
		<li class="circle">
			<p>育児休暇率</p>
			<div class="one">
				<p class="num"><span>0</span>%</p>
			</div>
		</li>
		<li class="circle">
			<p>新卒・中途の比率</p>
			<div class="two">
				<p class="num"><span>1:9</span></p>
			</div>
		</li>
	</ul>
	<ul class="fl_con">
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
							[ 'value' => 87, 'caption' => "長野", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '神奈川・山形', 'color' => '#FEE929'],
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
			<dd><?= $co['industry']?></dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>建築、リフォーム</li>
					<li>道路、水道、河川、舗装、下水道、橋梁、土地改良、宅地造成、などの基盤整備工事</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>北澤隆洋</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>30名（2024年2月20日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd><?= $co['post-code']?><br><?= $co['adress']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3217.3819080239614!2d138.46759807650105!3d36.254505972407784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dcb5aeb822259%3A0xbdfb0d798128c345!2z5YaF6Jek5bel5qWt5omA!5e0!3m2!1sja!2sjp!4v1738231241938!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-85-2039</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.kitazawadoken.co.jp/">https://www.kitazawadoken.co.jp/ </a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>必要不可欠な仕事</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="word">北澤隆洋</span></figcaption>
		</figure>
		<p>
		    　当社が長く続けて来られたのは、お客様や地域のみなさまのおかげです。<br>
			　令和元年の台風19号のときは、緊急対応として県・市町村から橋や道路など多くの修繕依頼をいただきました。周りからは「信頼があるからだよ」といってもらい、今まで築き上げてきたものの大切さを実感しました。
		</p>
		<p>
		    　橋があるから川を渡れるし、工場があるから働ける。そんな“当たり前”の生活を支えているのが、私たち北澤土建です。<br>
			　チームワークを大切にできる人、誠実な人に向いていると思います。難しい仕事ですが、先輩と一緒に少しずつ覚えていけば大丈夫。ぜひ、一緒に働きましょう！
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
			<a href="<?= $company_base ?>job_kinzoku/">
				<figure>
					<img src="<?= $company_base ?>job_kinzoku/firstview.jpg" alt="">
					<figcaption>土木施工管理技士</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_yousetsu/">
				<figure>
					<img src="firstview.jpg" alt="">
					<figcaption>建築施工管理技士</figcaption>
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
