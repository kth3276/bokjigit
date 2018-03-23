<?php
$conn = mysqli_connect("localhost", "root", "5583sw");
mysqli_select_db($conn, "newdata");
$result = mysqli_query($conn, "SELECT * FROM note");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BOKJI 2nd Street</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.php">BOKJI 2nd Street</a></h1>
							<span class="tag">by 2MoonDong</span>
						</div>
						<nav id="nav">
							<ul>
								<li class="active"><a href="index.php">Homepage</a></li>
								<li><a href="whoweare.html">Who we are</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="freeboard.php">Free Board</a></li>
							</ul>
						</nav>
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
						<section>
							<p>We are <strong>Bokji 2nd Street</strong>, a team in <a href="http://hufs.ac.kr">HUFs</a>.
								 We analize the <strong>STATISTICAL</strong> characteristics of 7 regions in Korea.
								 We suggest well-fitted <strong>WELFARE</strong> pledges for the people.
								 Also, We help you <strong>WIN</strong> the election. Don't miss your chance!</p>
							<a href="#extra" class="button medium">Continue</a>
						</section>
					</div>

				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/1_seoul.jpg" alt=""></a>
									<div class="box">
										<p>서울은 단순히 한국의 최대 도시가 아니라 서울이 곧 한국입니다. 24시간 불빛이 꺼지지 않는 도시로 유명하죠. 가장 많은 표본이 포함되어있는 서울 맞춤 공약으로 gogo!</p>
										<a href="Seoul.php" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/2_kyungki.jpg" alt=""></a>
									<div class="box">
										<p>경기도는 대한민국에서 인구가 제일 많은 광역자치단체이며 인천은 한국 최대 공항을 품은 대도시입니다. 전문직이 많고 소득이 높은 경기도와 인천의 맞춤 공략을 볼까요?</p>
										<a href="Gyeonggi.php" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/3_gyungnam.jpg" alt=""></a>
									<div class="box">
										<p>경남은 대한민국 항공 우주 산업의 중심지입니다. 부산은 동남권을 대표하는 한국 제2 도시입니다. 대통령을 가장 많이 배출한 부산과 경남의 맞춤 공략은 무엇있까요?</p>
										<a href="Gyeongnam.php" class="button">Read More</a> </div>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/4_gyungbuk.jpg" alt=""></a>
									<div class="box">
										<p>대구·경북은 자랑스런 컬링 국가대표 ‘영미’(Garlic Girls)의 고향입니다. 통계분석 결과 복지의 수요가 가장 높을 것으로 나타난 대구·경북을 위한 정책을 알아보러 가시죠.</p>
										<a href="Gyeongbuk.php" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/5_chungchung.jpg" alt=""></a>
									<div class="box">
										<p>충청남도는 대한민국에서 양반이 가장 많은 지역이며 대전은 한국 과학 인재들이 모여있습니다. 한국의 농업중심지 충청도와 과학중심지 대전에는 어떤 공약이 알맞을까요?</p>
										<a href="Chungnam.php" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/6_gangwon.jpg" alt=""></a>
									<div class="box">
										<p>강원도는 세계인의 축제, 평창올림픽이 열리는 지역입니다. 충청북도는 강원도와 유사한 통계적 특징을 갖습니다. 노령화에 대한 관심이 높은 강원도와 충청북도 맞춤 공약은?</p>
										<a href="Gangwon.php" class="button">Read More</a> </div>
								</section>
							</section>
							<section class="4u"> <a href="#" class="image featured"><img src="images/7_jeonra.jpg" alt=""></a>
								<div class="box">
									<p>광주·전라는 대한민국 식문화의 총본산입니다. 제주는 한국 관광업의 중심지이며 빼어난 자연경관을 자랑합니다. 황사로 인한 피해가 가장 크고 의료 혜택 수요가 높은 광주·전라·제주는 어떤 공약이 알맞을까요? </p>
									<a href="Jeonra.php" class="button">Read More</a> </div>
							</section>
							</div>
						</div>
					</div>

				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row">

								<!-- Content -->
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-wrench">
												<h3>Project info</h3>
												<span>도지사 만들어 드립니다. 다가오는 6·13 지방선거의 맞춤형 복지공약을 추천합니다. 지역민의 직접적인 의견을 반영합니다. 그들이 인지하지 못한 '복지 사각지대'도 예방합니다.
													유권자의 공약 관심도가 높아졌습니다. 복지에의 요구가 증대됐습니다. 그러나 기성 정치권의 복지공약은 천편일률적입니다. 재설계가 필요한 이유입니다.</span> </li>
											<li class="fa fa-leaf">
												<h3>Statistical Info</h3>
												<span>2016년 제11차 한국복지패널조사 데이터를 사용합니다. 설문문항을 바탕으로 추상개념을 도출합니다. 이를 바탕으로 데이터를 2차 가공합니다. 가공된 데이터를 기반으로, 인구통계학적 특성과 우리가 조작한 개념의 '모든' 관계를 고려합니다.
													 다음은 공약입니다. 2014 제6회 지방선거, 2016 제20회 총선, 2017 제19대 대선에 약속된 복지 공약을 모두 가져옵니다. 중복 공약을 제거한 뒤 코딩된 공약집을 만듭니다.
													 파악된 지역 특성에 맞게, 공약집에서 맞춤 공약을 추출합니다.</span> </li>
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-cogs">
												<h3>Programing info</h3>
												<span>우리는 학습한 내용을 최대한 활용하려 합니다. APACHE를 통해 MySQL 데이터베이스에 데이터를 저장하고 PHP를 이용해 웹사이트로 가져와 구현합니다.
													 HTML, CSS, JavaScript를 적절히 엮어 홈페이지를 구성하였습니다.
													 통계 데이터를 SPSS와 Excel로 처리하며 이 데이터를 R로 시각화하였습니다.</span> </li>
											<li class="fa fa-road">
												<h3>and We are</h3>
												<span>"야근은 무능이다." 유니클로 회장의 철학입니다. 그 철학에 따라 본사의 야근은 절대 없습니다. 근데 우리 조는 매일 야근했습니다. 2주 내내 말입니다. 이 글 역시 늦밤 작업의 산물입니다. 자신 있게 말씀드립니다.
													 능력 없어서 그런 거 아닙니다. 식사를 두 시간씩 했습니다.
													 그래서 늦었습니다. 밥 먹으면 집 갈 시간인데 어떡합니까. 나 집 가야 되는데. 집 가고 싶은데. 나 집 가야겠다. 안녕!</span> </li>
										</ul>
									</section>
								</div>
							</div>
						</div>
					</div>

	</div>

	<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<section>
					<header class="major">
						<h2>저희와 소통하고 싶으신가요?</h2>
						<span class="byline">게시판에 글을 남겨주시면 email로 답변을 보내드립니다!</span>
					</header>
					<form  action="process.php" method="post">
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="name" id="name" placeholder="Name" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="email" id="email" placeholder="Email" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="title" id="title" placeholder="Title" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<ul class="actions">
									<li>
										<input type="submit" value="Write on Freeboard" class="button alt" />
									</li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Project by: <a>Gamin, JoonSeo, SeongMin, Taehoon, HyeonCheol, Yoon, YoonHa</a></p>
					<p>Email: hufdb2@gmail.com</p>
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>
