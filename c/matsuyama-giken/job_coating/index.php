<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch_copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['description'] ?? '';


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
    <img alt="" class="fv_image" src="work4.jpg">
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
	<p>
		コーティング処理は、金属製品の表面に硬い膜を作ります。金属表面のすり減りにくさ、滑りやすさを高め、金属製品の寿命を延ばす処理です。<br>
		このコーティング処理は、科学実験の電気分解をイメージしてもらえると、わかりやすいかもしれません。金属をイオン化させて部品の表面を覆っていきます。
	</p>
	<h3>コーティングとは</h3>
	<p>
		コーティング処理は、他のどの部署とも性格の違う加工をしています。扱うもの比較的小さいことも特徴的です。<br>
		反対にやはり松山技研というところもあります。部品を処理するときの設備の中の温度は800度ほどになります。やはり熱とは切っても切れない関係にある松山技研です。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<h3>加工の準備</h3>
	<p>
		はじめに金属製品に付着している油分や酸化層を除去取り除することから始めきます。この処理はどの加工でも行いますが、コーティングは小さいものを扱うことが多く、手作業になることもあります。<br>
		松山技研の行っている金属加工処理の中で、唯一マスキングという前処理があります。コーティングしない部分をテープで覆う作業です。前処理が終わった部品を金具に取り付けて準備完了です。細かい作業が多いこともコーティング処理の特徴です。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
		<img src="work3.jpg" alt="" class="scene">
	</div>
	<h3>オペレーター</h3>
	<p>
		コーティング処理をおこなう設備に入れたら、設備の隣のパソコンで、コーティング処理方法を設定し、設備を動かします。<br>
		コーティング膜の種類や製品形状によって、いろいろな処理の仕方があるので、コーティングの方法について考え、工夫 することが多い仕事です。
	</p>
	<div class="images">
		<img src="work4.jpg" alt="" class="scene">
		<img src="work5.jpg" alt="" class="scene">
	</div>
	<p>
		最後に、的確なコーティング処理をおこなえているかなどを確認し、出荷します。
	</p>
	<div class="images">
		<img src="work6.jpg" alt="" class="scene">
		<img src="work7.jpg" alt="" class="scene">
	</div>
	<h3>働き方</h3>
	<p>
		コーティング事業は、早番（5:00～13:40）、常勤（8:20～17:00）、遅番（15:10～23:50）、夜勤（23:00～7:40）の時間帯が勤務時間となります。それぞれの時間を順番にローテーションしながら働きます。
	</p>
	<p>
		はじめは、コーティング前におこなう検査の仕方を先輩に教えてもらいます。コーティング前の製品の状態を検査しながら、製品やコーティングの名前を覚えます。約半年ほど検査業務を行った後、設備の操作を先輩に教えてもらい覚えます。
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
				<img src="gallery1.jpg" alt="">
			</li>
			<li>
				<img src="work7.jpg" alt="">
			</li>
			<li>
				<img src="work1.jpg" alt="">
			</li>
			<li>
				<img src="work6.jpg" alt="">
			</li>
			<li>
				<img src="gallery5.jpg" alt="">
			</li>
			<li>
				<img src="gallery6.jpg" alt="">
			</li>
			<li>
				<img src="gallery7.jpg" alt="">
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
				<img src="employee1.jpg" alt="" style="    object-fit: contain;">
				<hgroup>
					<h3>K・Mさん</h3>
					<p>
						休日は、友達とどこか遊びに行ったり、家でSwitchやPlayStationといったゲームをやったりすることがほとんどです。夜勤の週は土曜日の朝８～９時ぐらいに帰宅するので、１日寝て過ごして、日曜日に遊んでいます。体調不良になったときに有給がないと困るので、考えながら取得するようにしています。
					</p>
				</hgroup>
			</div>
			<p>2022年新卒入社<br>K・Mさん</p>
		</li>
	</ul>
</section>
<section class="g requirements" id="recruitment_requirements">
	<h2>募集要項</h2>
	<div class="tabs">
		<button class="tab1">募集要項</button>
		<button class="tab2">青少年雇用情報</button>
		<button class="tab3">選考方法</button>
	</div>
	<div class="requirement">
		<div class="content recruitment">
			<h3>仕事内容</h3>
			<dl>
				<div>
					<dt>募集職種</dt>
					<dd>金属加工</dd>
				</div>
				<div>
					<dt>雇用形態</dt>
					<dd>正社員</dd>
				</div>
				<div>
					<dt>雇用期間</dt>
					<dd>定めなし</dd>
				</div>
				<div>
					<dt>契約更新の可能性</dt>
					<dd></dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd>3か月</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>待遇の変更なし</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>
						〒386-0407
						長野県上田市長瀬１０５０
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田丸子線　上長瀬駅から徒歩15分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>（屋内禁煙）</dd>
				</div>
				<div>
					<dt>マイカー通勤</dt>
					<dd>可</dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>必要な知識・技能等</dt>
					<dd>不問</dd>
				</div>
			</dl>
			<h3>賃金・手当</h3>
			<dl>
				<div>
					<dt>賃金形態</dt>
					<dd>月給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>20.8日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>高卒以上170,000～　1か月160時間勤務の場合、残業代別</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>170,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月　20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（月額18,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（新卒者の前年度実績）3%</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回 4.5ヶ月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時20分〜17時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月20時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日115日</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、財形保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd></dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（一律60歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限65歳まで）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり（上限70歳まで）</dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd>なし</dd>
				</div>
			</dl>
		</div>
		<div class="content career">
			<h3>青少年雇用情報</h3>
			<dl>
				<div>
					<dt>直近3年間の新卒者等採用者数</dt>
					<dd>前年度:6人、2年度前：5人、3年度前：7人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:6人、2年度前：2人、3年度前：4人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：3人、3年度前：3人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						10年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>37歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						外部機関による研修・社内研修・メンタルヘルス教育・得意先、関連会
					社の見学
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						通信教育費用を会社で負担
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>20時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>10日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：2人、男性：1人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>5名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd></dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>2名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接、適性検査</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後7日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						総務部<br>
						吉池一樹
					</dd>
				</div>
			</dl>
		</div>
	</div>
	<div>
		<a href="../apply/#entry" class="btn_entry">
			<img src="../../../flag.png" class="flag">
			<span>応募前見学情報を見る</span>
			<img src="../../../arrow.svg">
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
                            <img src="<?= $company_base . $prop['image'] ?>" alt="" style="aspect-ratio: 3 / 2; object-fit: cover;">
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
<?php //include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
