<!doctype html>
<html>
<head>
<?php get_header(); ?>
</head>

<body id="access">
<div id="check320" style="width:320px;background:#0ff;height:0.5em;"></div>
<div id="page_top"><a href="index.html"></a></div>
<div id="container">
<?php get_template_part('includes/header'); ?>
    <p class="visuals"><img src="<?php echo get_template_directory_uri(); ?>/images/access/access_visual.jpg" alt="夜のアルチザンマコト外観"></p>
	<div id="access-content">
  <section class="clearfix" >
    <h2>Access<br><span>アクセス</span></h2>
		<p id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.7810806817656!2d139.6197810152568!3d35.60846638021124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f43d0b62390d%3A0xcf78484d48d13363!2z44CSMjEzLTAwMDIg56We5aWI5bed55yM5bed5bSO5biC6auY5rSl5Yy65LqM5a2Q77yR5LiB55uu77yR4oiS77yS77yT!5e0!3m2!1sja!2sjp!4v1582594625849!5m2!1sja!2sjp" width="980" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
    <ul>
			<li>東急田園都市線二子新地駅の正面改札を出て左へ159m直進。1つ目の信号をまっすぐ渡り右手にお店があります。(徒歩2分)</li>
			<li>二子玉川駅正面改札を出て左手246を川崎方面へ進み、橋を渡って2つ目の信号を右に進み右手にお店があります。(徒歩12分)</li>
		</ul>
		<h2>Shop<br><span>店舗情報</span></h2>
		<p id="shop"><img src="<?php echo get_template_directory_uri(); ?>/images/access/shop.jpg" alt="アルチザンマコトの店舗外観"></p>
		<div id="shopdetail" >
        <h3>アルチザンマコト/ARTISAN MAKOTO</h3>
        <dl>
            <dt>&#9670;営業時間&#9670;</dt>
            <dd>ランチ 11:30~14:00<br>
            <!-- ティータイム 14:00~16:00<br> -->
                ディナー 17:00~20:00(ラストオーダー19:00)</dd>
            <dd>水曜定休(祝日の場合は営業)</dd>
        </dl>
        <p>住所	&raquo; 神奈川県川崎市高津区二子1-1-23</p>
        <p><a href="tel:080-7826-2073">TEL	&raquo; 080-7826-2073</a><br>&#10048;ご予約&amp;お問合せはお電話でご連絡ください&#10048;</p>
        <dl>
          <dt></dt>
          <dd>Lunch 11:30-14:00<br>
              <!-- Tea-time 14:00-16:00<br> -->
              Dinner 17:00-20:00(L.O.19:00)</dd>
          <dd>We are regularly closed on Wednesday. 	(Open on public holidays)</dd>
        </dl>
          <p> &#12320;213-0002 / 1-1-23 Futako Takatsu-ku Kawasaki Kanagawa</p>
					<p>&phone; 080-7826-2073<br>※Please contact us by phone for reservations and questions.</p>
		</div>
  </section>
	</div><!--main-->
	<?php get_template_part('includes/footer'); ?>
</div><!--containar-->
</body>
</html>
