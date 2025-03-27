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
				クレーンで持ち上げて繋げろ!ダイナミックな製缶溶接
			</h3>
			<p>
				製缶溶接では、金属加工部がつくったパーツを一つひとつ溶接によってつなぎ合わせ、フレーム枠に仕上げていきます。<br>
				それぞれのパーツは大きく、人間の力だけでは持てないくらい重いので、クレーンを使って運ぶことが多いです。
			</p>
			<div class="images">
				<img src="../firstview.jpg" alt="" class="scene">
				<img src="yousetsu1.jpg" alt="" class="scene">
			</div>
			<h3>
				大きい溶接だけでなく、小さな溶接も!
			</h3>
			<p>
				巨大な製品の中にも、小さなパーツを組み込む部分もあります。こうした部分は、繊細で精度が求められます。電磁石やマグネットでしっかり固定して、ずれないように慎重に溶接していきます。
			</p>
			<div class="images">
				<img src="yousetsu2.jpg" alt="" class="scene">
			</div>
			<h3>
				まずは廃材を使って溶接練習から
			</h3>
			<p>
				入社後は、廃材を使って溶接の練習をスタートします。<br>
				溶接時には強い光と火花が出るため、安全対策として直視しないためのマスクと火花から身を守るための革手袋を装着します。しっかりと身につけていれば、やけどの心配はありません。
			</p>
			<div class="images">
				<img src="yousetsu3.jpg" alt="" class="scene">
			</div>
			<p>
			マスク越しにのぞくと、実は真っ暗で強い光しか見えません。最初は、まっすぐに溶接をすることすら難しいですが、はやい人だと1か月ほどでコツを掴めます。
			</p>
			<div class="images">
				<img src="DSC_4156.jpg" alt="" class="scene">
			</div>
			<p>
				溶接は一見、誰がやっても同じように見えますが、実は人によって仕上がりに大きな違いが出ます。<br>
				例えば、溶接後に溶接機を離すタイミングによって、表面が黒くなったりすることもあります。こうした細かな違いが職人のスキルで変わるポイントです。
			</p>
			<div class="images">
				<img src="DSC_4158.jpg" alt="" class="scene">
				<img src="DSC_4161.jpg" alt="" class="scene">
			</div>
			<p>
				最初は綺麗に仕上がらなかったり、設計図通りの大きさにならなかったりすることもありますが、誰もが通る道です。<br>
				上手くいかないと感じた時は、遠慮せず先輩に相談してください。未経験からスタートした社員ばかりなので、どうすれば上手くできるか、いろいろアドバイスしてもらえます。
			</p>
			<p>
				また、溶接作業だけでなく、フォークリフトを運転して材料を運ぶこともあります。「運転してみたい！」という人も大歓迎です。資格取得支援もあるので、いろいろなことに挑戦していきましょう！
			</p>
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
					<li>
						<img src="DSC_4154_1.jpg" alt="">
					</li>
					<li>
						<img src="yoseturobo.jpg" alt="">
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
					<h3>塩川さん</h3>
					<p>
						高校は工業科ではなかったのですが、製造業に興味があり、さまざまな地元の会社に見学に行きました。内藤工業所の見学をしたときに溶接を見て、「めちゃくちゃ綺麗だな、すげえな」と印象に残り、応募しました。<br>
						ゲームが好きで、休みの日は家族とスマブラで遊ぶことが多いです。
					</p>
				</hgroup>
			</div>
			<p>2019年新卒入社<br>塩川さん</p>
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
								169,000円～（平均226,000円）
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>通勤手当、皆勤手当（16,000円～）</dd>
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
								〒3850051<br>
								長野県佐久市中込3368-3
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>8時10分〜17時15分</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>65分</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>週休2日制（土日・祝日・他）、年間休日113日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均20時間</dd>
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
							<dd>0名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd>長野県長野西高等学校 望月サテライト校</dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>20時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>10日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd>役員 25%、管理職 0%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>10年<br>
							※創業以降の実績</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>自己啓発支援制度</dt>
							<dd>
								<p>
									〇資格取得支援<br>
									業務に関係するの資格取得にかかる費用について、会社承認の上で、100%補助を行っています。
								</p>
							</dd>
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
