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
$title = $name . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = $meta_keywords;
$description = $meta_desc;

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/' . $last_segment . '/';

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
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="../firstview.jpg">
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
				工事現場をスムーズに進める指揮官！
			</h3>
			<p>
			建物をつくるとき、実際に工事をするのは大工さんや水道・電気などの職人さんたちです。でも、その工事がスムーズに進むように全体を管理するのが「建築施工管理」の仕事です。
			</p>
			<p>
			文化祭の実行委員長を思い浮かべてみてください。みんなの作業の様子を見て回り、把握して指示を出すことで、文化祭が成功します。こうした人がいないと、文化祭の準備が間に合わなくなったり、足りないものが出てきたりするかもしれません。施工管理も同じです。現場全体をまとめ、工事がスムーズに進むように職人さんに指示を出すのが役割です。
	        </p>
			<p>
			まず、設計図や完成予定日をもとに、どの作業をいつまでに終わらせるかの計画を立てて書類にまとめます。大きな工事だと、ファイル一冊分になることもあります。
	        </p>	
			<p>
            その計画に合わせて、職人さんに作業の連絡をしたり、必要な材料を発注したりします。工事が始まる前には、作業の拠点となる「現場事務所」という仮設の建物を準備するのも施工管理の仕事です。
	        </p>
			<p>
			工事が始まったら、図面通り、計画通りに工事が進んでいるかをチェックします。予定通りにいかないこともあるので、そんなときは調整が必要です。
	        </p>
            <p>
			施工管理の役割は、「実際につくる人」ではなく「把握してまとめる人」。工事現場を支え、成功へ導く工事の指揮官です！
	        </p>
			<div class="images">
				<img src="../firstview.jpg" alt="" class="scene">
				<img src="yousetsu1.jpg" alt="" class="scene">
			</div>
			<h3>
				何十年も地域に残る
			</h3>
			<p>
			私たちは、学校や体育館、店舗、工場など、地域の暮らしに欠かせないさまざまな建物の施工管理を行っています。特に公共施設を手がけることが多く、現場が大きくなるほど関わる職人さんが増えます。
			</p>
			<div class="images">
				<img src="yousetsu2.jpg" alt="" class="scene">
			</div>
			<p>
			建物が完成した瞬間、たくさんの協力会社や職人さんと一緒に成し遂げた達成感は、言葉では表せません。地図に残るような建物をつくり、それが何十年も地域に残る。そんな『街の未来をつくる』ことが、建築施工管理の魅力の一つです。
	        </p>
			
			<h3>
				資格取得を目指す
			</h3>
			<p>
			施工管理をするには、『施工管理技士』と呼ばれる国家資格が必要になります。北澤土建では、入社後に資格を取得できるように会社全体でサポートしています。<br>
			まずは、先輩と一緒に現場で仕事を学びながら経験を積んでいきます。最初は先輩のお手伝いから始めて、仕事の流れを覚えていきます。 
			上司や先輩、周りの職人さんたちも優しく教えてくれるので、安心してスキルを身につけてください。
		    </p>
			<div class="images">
				<img src="yousetsu3.jpg" alt="" class="scene">
			</div>
			
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
					<li>
				<img src="yousetsu1.jpg" alt="">
			</li>
        <li>
				<img src="yousetsu2.jpg" alt="">
			</li>
        <li>
				<img src="yousetsu3.jpg" alt="">
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
				<img src="shiokawa.jpg" alt="">
				<hgroup>
					<h3>2020年新卒入社</h3>
					<p>堀さん</p>
				</hgroup>
			</div>
			<p>2020年新卒入社<br>堀さん</p>
            <p>入社したばかりのときは、上司が作成したスケジュールをパソコンで清書することから始めました。少しずつ仕事を覚えていき、今では約5千万円規模の現場を管理できるようになりました。
	        </p>
			<p>施工管理の仕事は、ひとつの分野に特化するのではなく、さまざまな知識を身につけられるのが楽しいです。今は建築士の資格取得に向けても勉強中です。
	        </p>
			<p>会社の雰囲気が良いし、上司も優しいし、人間関係で困ったことは一度もありません。
	        </p>
			<p>休みの日は、友達とスノーボードに行ったり、マラソン大会に出たり、アクティブに過ごすのが好きです。
	        </p>

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
							<dd>施工管理(土木／建築)</dd>
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
							<dd>3名</dd>
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
								240,000～<br
								>
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd></dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>年1回</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>年2回(2.5か月分)</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>なし</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd></dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒3890502<br>
								長野県上田市武石沖４７１ー１
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>8時10分〜17時15分（休憩65分）</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>60分</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>週休2日制（シフト制）、年間休日123日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均10時間位</dd>
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
							<dd>２名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>１名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd>長野大学</dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>13.5時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>8.5日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd>役員 0%、管理職 0%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>3.0年（アルバイト・パートを除く）<br>
							※2017年の創業以降の実績</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3></h3>
					<dl>
						<div>
							<dt></dt>
							<dd></dd>
						</div>
						<div>
							<dt></dt>
							<dd>
				<p>
					
				</p>
				<p>
					
				</p>
				<p>
					
				</p>
				<p>
				
				</p>
			</dd>
		</div>
		<div>
			<dt></dt>
			<dd>
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
        <?php foreach ($occupation as $key => $prop): ?>
            <?php if ($key !== $last_segment): // 現在のURLと異なる職種のみ表示 ?>
                <li>
                    <a href="<?= $company_base . $prop['url'] ?>">
                        <figure>
                            <img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
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
