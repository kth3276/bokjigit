<?php
$conn = mysqli_connect("localhost", "root", "5583sw");
mysqli_select_db($conn, "newdata");
$result = mysqli_query($conn, "SELECT * FROM note");
$result1 = mysqli_query($conn, "SELECT * FROM gyeonggi");
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
				</div>

				<!-- Page -->
					<div id="page" class="container">
						<div class="row">

							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header class="major">
										<h2>Select Location</h2>
									</header>
									<ul class="default">
										<li><a href="Seoul.php">Seoul</a></li>
										<li><a href="Gyeonggi.php">Gyeonggi / Incheon</a></li>
										<li><a href="Gyeongnam.php">Gyeongnam / Busan</a></li>
										<li><a href="Gyeongbuk.php">Gyeongbuk / Daegu</a></li>
										<li><a href="Chungnam.php">Chungnam / Daejun</a></li>
										<li><a href="Gangwon.php">Gangwon / Chungbuk</a></li>
										<li><a href="Jeonra.php">Jeonra / Gwangju / Jeju</a></li>
									</ul>
								</section>
							</div>

							<!-- Content -->

							<div id="content" class="8u skel-cell-important">
								<section>
									<a href="Gyeonggi.php?id=1" class="button">지역소개</a>
									<a href="Gyeonggi.php?id=2" class="button">통계자료</a>
									<a href="Gyeonggi.php?id=3" class="button">공약추천</a>
									<br>
									<br>
									<header class="major">
										<h2>Gyeonggi</h2>
										<span class="byline">#수원화성 #율동공원 #헤이리 #송도 #수도권 #인천공항</span>
										<br><br>
										<div class="image fit">
										<?php
											echo '<img src="images/allpics/1_gyeonggi/gyeonggi.jpeg">';
										?>
									</div>
									</header>
									<!-- <div class="image fit"> -->
										<div style="text-align:center;">
									<?php

									if(empty($_GET['id'])===true || $_GET['id']=='1'){
										$sql = 'SELECT * FROM gyeonggi WHERE id=1';
										$result1 = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result1);
										echo $row['desc1']."<br />"."<br />";
										echo '<h2>'.$row['desc2'].'</h2>'."<br />";
										echo $row['desc3']."<br />";
										echo '<img src="images/allpics/1_gyeonggi/gyeonggi0.jpeg" style="width:100%;">'."<br />";
										echo $row['desc4']."<br />"."<br />";
										echo $row['desc5']."<br />";
										echo "(그림을 클릭하면 확대)";
										echo '<div style="width:100%; height:width/2;">';
											echo '<div style="width:25%; height:100%; float:left;">';
											echo '<a href="images/allpics/1_gyeonggi/gyeonggi1.jpeg"><img src="images/allpics/1_gyeonggi/box1.jpeg" style="width:100%; height:100%; border:0px; display:block;" /></a>';
											echo '<a href="images/allpics/1_gyeonggi/gyeonggi2.jpeg"><img src="images/allpics/1_gyeonggi/box2.jpeg" style="width:100%; height:100%; border:0px; display:block; margin-top:0px;" /></a>';
											echo '</div>';
											echo '<div style="width:25%; height:100%; float:left;">';
											echo	'<a href="images/allpics/1_gyeonggi/gyeonggi3.jpeg"><img src="images/allpics/1_gyeonggi/box3.jpeg" style="width:100%; height:100%; border:0px; display:block;" /></a>';
											echo	'<a href="images/allpics/1_gyeonggi/gyeonggi4.jpeg"><img src="images/allpics/1_gyeonggi/box4.jpeg" style="width:100%; height:100%; border:0px; display:block; margin-top:0px;" /></a>';
											echo '</div>';
											echo '<div style="width:25%; height:100%; float:left;">';
											echo	'<a href="images/allpics/1_gyeonggi/gyeonggi5.jpeg"><img src="images/allpics/1_gyeonggi/box5.jpeg" style="width:100%; height:100%; border:0px; display:block;" /></a>';
											echo	'<a href="images/allpics/1_gyeonggi/gyeonggi6.jpeg"><img src="images/allpics/1_gyeonggi/box6.jpeg" style="width:100%; height:100%; border:0px; display:block; margin-top:0px;" /></a>';
											echo  '</div>';
											echo  '<div style="width:25%; height:100%; float:left;">';
											echo	'<a href="images/allpics/1_gyeonggi/gyeonggi7.jpeg"><img src="images/allpics/1_gyeonggi/box7.jpeg" style="width:100%; height:100%; border:0px; display:block;" /></a>';
											echo '<a href="images/allpics/1_gyeonggi/gyeonggi8.jpeg"><img src="images/allpics/1_gyeonggi/box8.jpeg" style="width:100%; height:100%; border:0px; display:block; margin-top:0px;" /></a>';
											echo '</div>';
										echo '</div>'."<br />";
									}
									if ($_GET['id']=='2'){
										$sql = 'SELECT * FROM gyeonggi WHERE id='.$_GET['id'];
										$result1 = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result1);
										echo '<h2>'.$row['desc1'].'</h2>'."<br />"."<br />";
										echo $row['desc2']."<br />"."<br />";
										// echo '<div style="width400px; height:180px;">';
											echo '<img src="images/allpics/1_gyeonggi/gyeonggi9.jpeg" style="width:100%; height:600px;">'."<br />";
										// echo  '</div>';
										echo $row['desc3']."<br />"."<br />";
											echo '<img src="images/allpics/1_gyeonggi/gyeonggi10.jpeg" style="width:100%; height:600px;">'."<br />";
									}
								  if ($_GET['id'] == '3'){
										$sql = 'SELECT * FROM gyeonggi WHERE id='.$_GET['id'];
										$result1 = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result1);
										echo '<h2>'.$row['desc1'].'</h2>'."<br />"."<br />";
										echo $row['desc2']."<br />"."<br />";
										echo '<img src="images/allpics/1_gyeonggi/gyeonggi11.jpeg" style="width:100%;">'."<br />";
									}
									?>
								<!-- </div> -->







								</div>
								</section>


							</div>


						</div>
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
