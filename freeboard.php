<?php
$conn = mysqli_connect("localhost", "root", "5583sw");
mysqli_select_db($conn, "newdata");
$result = mysqli_query($conn, "SELECT * FROM note");
?>
<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>BOKJI 2nd Street</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
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

				<!-- Page -->
					<div id="page" class="container">
						<section>
							<header class="major">
								<h2>Free Board</h2>
								<span class="byline">자유롭게 글을 써주세요!</span>
							</header>
						<div style="margin:0 auto;">
							<br>
							<?php
							while ($row = mysqli_fetch_assoc($result)) {
								// echo '<li><a href="freeboard.php?id='.$row['id'].'">'.$row['id'].'. '.$row['title'].'</a></li>';
								echo $row['id']."."."&nbsp"."&nbsp"."&nbsp"."&nbsp".'<a href="freeboard.php?id='.$row['id'].'">'.$row['title'].'</a>'
								."&nbsp"."&nbsp"."&nbsp"."by ".$row['name']."<br />";
							}
							 ?>
							 <br>
							 <br>
							 <br>
							 <?php
				 			if(empty($_GET['id'])===false){
				 				$sql = 'SELECT * FROM note WHERE id='.$_GET['id'];
				 				$result = mysqli_query($conn, $sql);
				 				$row = mysqli_fetch_assoc($result);
				 				echo '<h2>'.$row['title'].'</h2>';
								echo "작성자: ".$row['name']."&nbsp"."&nbsp"."&nbsp"."email: ".$row['email']."<br />";
				 				echo $row['message'];
				 			}
				 			 ?>


						<!-- </div> -->
						</section>
					</div>
				<!-- /Page -->

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
					<p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
					<p>Project by: <a>Gamin, JoonSeo, SeongMin, Taehoon, HyeonCheol, Yoon, YoonHa</a></p>
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
