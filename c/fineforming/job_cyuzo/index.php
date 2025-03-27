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
				溶かしたアルミを型に流し込み、製品を製造する
			</h3>
			<p>
				私たちの仕事は、約800度まで熱して溶かしたアルミを「金型」と呼ばれる製品の型に流し込み、固めることで自動車や自転車などに使われる部品を製造することです。
			</p>
			<div class="images">
				<img src="contents1.jpg" alt="" class="scene">
				<img src="contents2.jpg" alt="" class="scene">
			</div>
			<p>
				イメージとしては、溶かしたチョコレートを型に流し込んで固めるのと似ています。それのアルミ版と考えてもらうと分かりやすいと思います。<br>
				鋳造の工程は大きく分けて「鋳込み」と「湯口切断」の2つがあり、それぞれを専門に担当しています。<br>
				ここから先は、それぞれの具体的な内容についてご紹介します。
			</p>
			<h3>
				溶かしたアルミを金型に流し込む「鋳込み」
			</h3>
			<p>
				「鋳込み」は、溶かしたアルミを金型に流し込む工程です。<br>
				高温で重たいアルミを取り扱うため、「湯汲み」という道具を使い、慎重に金型へ流し込みます。<br>
				勢い良く流し込むと空気が混入して不良品（出荷できない部品）になり、逆に遅すぎると綺麗に固まらないため、何回も経験を積みながら、最適な感覚を掴んでいきます。
			</p>
			<div class="images">
				<img src="contents3.jpg" alt="" class="scene">
			</div>
			<p>
				湯汲みには3種類のサイズがあり、製造する部品の大きさによって使い分けます。<br>
				例えば、大きい製品は5kgの湯汲み、小さい製品は1kgの湯汲みを使用します。
			</p>
			<div class="images">
				<img src="contents4.jpg" alt="" class="scene">
			</div>
			<p>
				流し込んだ後は、製品が固まるまで待機する時間があるため、一人で複数の金型を担当します。5kgの製品は約3分、1kgの製品は約1分で固まります。<br>
				金型にアルミを流し込むと、自動的に金型が倒れ、製品が固まると自動で起き上がる仕組みになっています。そのため、機械が起き上がったら、足で金型を開けるボタンを踏み、製品を型から取り外して完成となります。
			</p>
			<div class="images">
				<img src="contents5.jpg" alt="" class="scene">
				<img src="contents6.jpg" alt="" class="scene">
			</div>
			<p>
				見た目はアルミの色をしていますが、実際にはとても高温なので、注意が必要です。<br>
				また、定期的にアルミインゴットを炉に入れ、アルミを溶かす仕事も行います。<br>
				勢いよく入れると、溶けたアルミが飛び散る恐れがあるため、ゆっくりとインゴットを炉の中に投下していきます。
			</p>
			<div class="images">
				<img src="contents7.jpg" alt="" class="scene">
				<img src="contents8.jpg" alt="" class="scene">
			</div>
			<h3>
				固まった製品を仕上げる「湯口切断」
			</h3>
			<p>
				アルミが固まった後は、「湯口切断」という工程に入ります。<br>
				湯口とは、アルミを流し込む際にできる不要な部分のことで、機械を使って切断し、出荷できる状態にまで製品を仕上げます。
			</p>
			<div class="images">
				<img src="contents9.jpg" alt="" class="scene">
				<img src="contents10.jpg" alt="" class="scene">
			</div>
			<p>
				金属を切断する機械なので、当然ながら取り扱いには注意が必要です。そのため、防護具をしっかりと身に着け、安全を確保しながら湯口切断を進めていきます。<br>
				初めて湯口切断を行う場合は、チップソーと呼ばれる機械を使用します。この機械は、製品を投入すると自動で切断してくれるため、人が直接刃に触れることなく、安全に作業ができます。
			</p>
			<div class="images">
				<img src="contents11.jpg" alt="" class="scene">
			</div>
			<p>
				湯口を切断した後は、「バリ取り」と呼ばれる仕上げ作業を行い、製品が完成します。<br>
				通常は、鋳込みと湯口切断はそれぞれの担当に分かれていますが、場合によっては一人で両方を担当することもあります。
			</p>
			<h3>
				入社後は、道具の使い方に慣れることから始めよう
			</h3>
			<p>
				この仕事では、高温のアルミを取り扱うため、初心者がすぐに現場で作業することはありません。<br>
				万が一、溶けたアルミを持った状態で転んでしまったりすれば、大きな事故につながる危険があるからです。
			</p>
			<div class="images">
				<img src="contents12.jpg" alt="" class="scene">
			</div>
			<p>
				そのため、まずは道具の使い方をマスターすることからスタートします。<br>
				①湯汲みを使って溶けたアルミをすくう練習<br>
				②アルミを運ぶ練習<br>
				③機械の操作を学ぶ<br>
				このような基本練習を重ね、少しずつ仕事に慣れていきます。<br>
				2～3週間ほどの訓練を経て、ようやく現場デビューとなります。
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
				<img src="hoyano.jpg" alt="">
				<hgroup>
					<h3>保屋野朗光</h3>
					<p>
						前職では金属の切削加工をしていました。子供の頃からプラモデル作りやバイクいじりが好きで、ものづくりに興味を持っていました。<br>
						ファインファーミングはハローワークで知りました。<br>
						「鋳造」と「鍛造」を一緒に行うのは珍しいなと思ったことが、応募したキッカケです。<br>
						今は鋳造の鋳込みを中心に仕事をしていますが、アルミを流し込む際の力加減に苦労しました。その日の金型のコンディションや温度によって、昨日と同じ力加減では綺麗に仕上がらないこともり、簡単な単純作業に見えて、意外と神経と集中力を使う仕事です。<br>
						そのため、だた黙々とやっている仕事ではなく、「技術」を身に付けられる仕事だなと実感しています。
					</p>
				</hgroup>
			</div>
			<p>2021年中途入社<br>保屋野朗光</p>
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
							<dd>鋳造職人</dd>
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
							<dd>〇名</dd>
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
								〇〇円～
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>【TBD】</dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-2203<br>
								長野県上田市真田町傍陽938
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>【TBD】</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>6【TBD】</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>週休2日制、年間休日〇日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均19時間</dd>
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
							<dd>〇名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>〇名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd>【TBD】</dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>19時間</dd>
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
							<dd>役員 〇%、管理職 〇%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>7年<br>
							※創業以降の実績</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>研修制度</dt>
							<dd>OJTのみ</dd>
						</div>
						<div>
							<dt>自己啓発支援制度</dt>
							<dd>
				<p>
					〇社内定期勉強会<br>
					当社メンバーが主体となり、定期的な社内勉強会を実施しています。長期に渡るものや、単発のものまで様々ですが、メンバー自らが勉強会の企画から考え、実行しています。<br>
					最近では、ウェブデザイン勉強会や、アクセス解析勉強会、マーケティング勉強会などを行いました。<br>
				</p>
				<p>
					〇資格取得支援<br>
					ウェブアナリスト、ウェブデザイン技能検定、ITパスポート、基本情報、ウェブ解析士などの資格取得にかかる費用を全て、会社承認の上で、100%補助を行っています。<br>
					また、資格取得に向けた社内勉強会も、随時開催しています。<br>
				</p>
				<p>
					〇当社主催の有料セミナーへの無料参加<br>
					当社では、「上田IT講座」というITセミナー事業を運営しています。行う講座内容は、HTML、CSSの内容から、データベース、プログラミング、Androidアプリ開発など、多岐に渡る講座を提供しています。<br>
					本来は、有料で参加できる講座ですが、当社メンバーは特別に無料で参加することができます。この機会に、新たな知識を付け、仕事に役立てている仲間も多くいます。<br>
				</p>
				<p>
					〇教材及び外部セミナー補助制度<br>
					ウェブ技術やデザインに関する教材本の購入にかかる費用を100%補助しています。また、外部セミナーへの受講費用は、勉強したことを社内で発表し、全メンバーに共有することを条件に50%補助しています。<br>
				</p>
			</dd>
		</div>
		<div>
			<dt>メンター制度</dt>
			<dd>
				〇役員面談<br>
				3ヵ月に一度の役員面談があります。役員面談では、3ヵ月間仕事を通じて、自らが成長した所を振り返ったり、今の仕事で悩んでいることがあれば遠慮なく言って頂く場として活用しています。<br>
				そして、このような場で教えて頂いた課題は、「個人の課題」ではなく、「会社の課題」として私たち経営層も捉え、もっと良い会社を創るために組織として課題解決に臨んでいきます。<br>
				また、正社員の場合、一年に一度ですがこの場で昇給の話もしていきます。<br>
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
