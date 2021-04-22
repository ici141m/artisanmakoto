<!doctype html>
<html>
<head>
	<?php get_header(); ?>
</head>

<body id="top">
<div id="check320" style="width:320px;background:#0ff;height:0.5em;"></div>
<div id="page_top"><a href="index.html"></a></div>
<div id="container">
	<?php get_template_part('includes/header'); ?>
		<p class="pconly"><img src="<?php echo get_template_directory_uri(); ?>/images/mainvisual.jpg" alt="お肉も、野菜も、たっぷり食べられるフレンチレストラン"></p>
		<p class="sponly"><img src="images/spmainvisual.jpg" alt="お肉も、野菜も、たっぷり食べられるフレンチレストラン"></p>
	<div id="main">
		<h2 id="concepttitle" class="text-focus-in">Concept<br><span>コンセプト</span></h2>
		<p id="concept" class="text-focus-in">アルチザンマコトは<br>肉料理が好きな方も、野菜料理が好きな方(Vegan)も、<br>一緒にお食事を楽しめるフレンチレストランです。</p>
		<div id="steakCurry">
				<dl>
					<dt class="likeh2">Steak<br><span>ステーキ</span></dt>
					<dd><img src="<?php echo get_template_directory_uri(); ?>/images/steak.jpg" width="450" height="450" alt="ステーキ"></dd>
					<dd>オーストラリア産のリブロースです。お肉も切り立てがおいしいので、かたまりのお肉をオーダーいただいてからのカットにこだわっています。</dd>
					<dd class="goMenu"><a href="menu/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/gotomenu.png" width="203" height="57" alt="メニューページへ"></a></dd>
				</dl>
				<dl>
					<dt class="likeh2">Vegan curry<br><span>ヴィーガンカレー</span></dt>
					<dd><img src="<?php echo get_template_directory_uri(); ?>/images/curry.jpg" width="450" height="450" alt="カレー"></dd>
					<dd>アルチザンマコトの看板メニュー。スパイスの名産地・インド・ケララ州から直輸入のオーガニックマサラを使用。にんにく、しょうが、たまねぎ、にんじん、じゃがいも、セロリ、トマト、レンコン、大根をじっくり煮込んで寝かした、野菜たっぷりのカレーです。</dd>
					<dd class="goMenu"><a href="menu/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/gotomenu2.png" width="203" height="57" alt="メニューページへ"></a></dd>
					</dl>
			</div><!--steakcurry-->
			<div id="news">
		<h2>News&amp;Event<br><span>お知らせ・イベント</span></h2>
					<dl>
						<dt class="light"><img src="<?php echo get_template_directory_uri(); ?>/images/event_salmon.jpg" alt="サーモンのプレート"></dt>
						<dd><h3>2020/03/20 サーモン入荷しました!!</h3>
              <p>サーモンブールルージュを作りました。家族や女子会、皆さまお気軽にお越しください。</p></dd>
						</dl>
					<dl>
						<dt class="light"><img src="<?php echo get_template_directory_uri(); ?>/images/event_tea.jpg" width="320" height="200" alt="紅茶とポット"></dt>
						<dd><h3>2020/02/01 稀少品の冬摘みのシルバーティップス入荷しました!!</h3>
						<p>なんと稀少品の冬摘みのシルバーティップスを入荷。紅茶の好きな方にご馳走しちゃいました。水の色と香りが凄い。なんだか最近コーヒーを飲まないお客様が多いような気がするのは私の気のせいなのか。 家族や女子会、皆さまお気軽にお越しください。</p></dd>
						</dl>
					<dl>
						<dt class="light"><img src="<?php echo get_template_directory_uri(); ?>/images/event_sake.jpg" alt="複数の日本酒"></dt>
						<dd><h3>2020/01/20 純米酒＆オーガニックチャイを楽しむパーティーのお知らせ</h3>
						<p>ビーガン・トリュフ・カリーとおつまみ、純米酒&amp;オーガニックチャイをたっぷり楽しむ冬の宵を企画中。1月20日19時スタートを予定しています。ピンと来た方、あけとてくださいね。</p></dd>
						</dl>
					<dl>
						<dt class="light"><img src="<?php echo get_template_directory_uri(); ?>/images/event_strawberry.jpg" alt="複数のイチゴ"></dt>
						<dd><h3>2019/12/01 イチゴが入荷しました!!</h3>
						<p>イチゴ!そんなことわざわざ書かなくても皆さんご存知香川のお土産で貰っちゃいました。既に摘まんでますが凄い香り&amp;甘さ。家族や女子会、皆さまお気軽にお越しください。。</p></dd>
						</dl>
				</div><!--news-->
			<?php echo do_shortcode('[instagram-feed]'); ?>
	</div><!--main-->
	<?php get_template_part('includes/footer'); ?>
</div><!--containar-->
</body>
</html>
