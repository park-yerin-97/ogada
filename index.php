<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link href="img/favicon.ico" rel="shortcut icon" type="image/icon">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">

	<title>CAFE 오가다</title>
  	<!-- [if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script>
			alert("현재 브라우저는 지원하지 않습니다. 크롬브라우저를 추천합니다.")
		</script>
	<![endif]-->
  <script src="js/jquery-3.6.1.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/main.js"></script>
	
</head>
<body>
	<!-- loading page -->
	<div class="loading_box">
    <div class="loading">
      <svg width="100%" height="100%">
        <image overflow="visible" width="150" height="160"
        x="85" y="80"
        xlink:href="img/loading.png"></image>
        
        <path
        id="text_circle" fill="none"
        d="M 78 128 C 46 207 165 296 227 198 C 277 66 100 49 78 127 Z"></path>
        <text>
          <textPath
          xlink:href="#text_circle" font-size="12"
          stroke="#3AAA5A"
          letter-spacing="2px"
          >
          LIVE IN HARMONY WITH NATURE!
          <animate
          attributeName="startOffset"
          values="0%;15%"
          dur="1s"
          fill="freeze"
          repeatCount="1"
          >
          </animate>
          </textPath>
        </text>
      </svg>
    </div>
  </div>
  
  <div id="wrap">
		<!-- header -->
    <?php
      include('inc/header.php');
    ?>
		<!-- visual -->
		<div id="visual">	
			<ul class="pic">
				<li class="pic01">
					<p><span>오가다</span>는 우리 것의 아름다움을<br>현대적으로 재해석합니다.</p>
				</li>
				<li class="pic02">
					<p><span>차</span>에 특화된 브랜드로서 한국적인<br>우리의 차를 연구하고 개발해왔습니다.</p>
				</li>
				<li class="pic03">
					<p><span>자연</span>에서 얻는 재료를 다듬어<br> 현대적으로 조화롭게 블렌딩하였습니다.</p>
				</li>
				<li class="pic01">
					<p><span>오가다</span>는 우리 것의 아름다움을<br> 현대적으로 재해석합니다.</p>
				</li>
			</ul> 
			<div class="arrow pc">
				<button type="button" class="left"><img src="img/main-left-arrow.png" alt="메인 비쥬얼 왼쪽 화살표"></button>
				<button type="button" class="right"><img src="img/main-right-arrow.png" alt="메인 비쥬얼 오른쪽 화살표"></button>
			</div>
			<ul class="indicator">
				<li class="on">1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</div>
		

		<!-- main -->
		<main>
			<!-- 브랜드섹션 -->
			<section id="brand" class="clearfix">
				<h2 class="screen_out">브랜드 섹션</h2>
				<div class="brand_left"></div>
				<div class="brand_right">
						<div class="brand_logo">
							<div><img src="img/brand-simbol-logo.png" alt="오가다 심볼 로고"></div>
							<div><img src="img/brand-txt-logo.png" alt="오가다 텍스트 로고"></div>
						</div>
						<p>
							<span>거리를 오가다</span> 누구나 들를 수 있는 영감 가득한 공간에서, 완벽한 커피&차와 함께 조화로운 순간을 선사합니다. 카페의 공간과 정성 가득한 메뉴, 서비스를 통해서 생활속의 조화로움을 수행하는 카페 브랜드입니다.
						</p>
						<a href="https://park-yerin-97.github.io/ogada/brand.html">자세히 보기</a>
				</div>
			</section>
	
			<!-- 티 섹션 -->
			<section id="tea">
				<div class="tea_top"></div>
				<div class="tea_center">
					<h2>오가다 차</h2>
					<strong>'가장 한국적인 우리의 차'</strong>
					<p>
						오가다는 한방차를 비롯하여 잎차, 허브차, 과일차, 블렌딩티 등의 차를 누구나 맛있고 건강하게 즐길 수 있도록 13년의 시간 동안 끊임없이 연구개발 해왔습니다.
					</p>
					<a href="https://park-yerin-97.github.io/ogada/menu.html">자세히보기</a>
				</div>
				<div class="tea_bottom">
				</div>
			</section>

			<!-- 커피 섹션 -->
			<section id="coffee">
				<div class="coffee_top"></div>
				<div class="coffee_center">
					<h2>오가다 커피</h2>
					<strong>감탄이 '오' 터지는 순간</strong>
					<p>
						원두 2종의 충분한 숙성과 
						발효과정을 통해 카페 오가다만의 
						풍미를 갖춘 블렌디드 원두를 
						사용하여 한국적인 감성의 커피를 
						완성하였습니다.
					</p>
				</div>
				<div class="coffee_bottom clearfix">
					<div class="coffee_bottom_left">
							<div class="left_txt">
								<strong>발효원두</strong>
								<p>브라질산 스페셜티 원두에 
									특허받은 발효 공정으로 120시간 
									발효시킨 후 로스팅하여 
									커피 고유의 우수한 풍미는 
									극대화 됩니다.						
								</p>
							</div>
					 </div>
					 <div class="coffee_bottom_right">
							<div class="right_txt">
								<strong>발아원두</strong>
								<p>선별한 원두에 24시간 이상의 
									발아과정을 거친 후 로스팅하여 
									유익 성분은 증가시키고, 카페인은 
									줄였으며 원두의 고소하고 
									깔끔한 뒷맛을 높였습니다.					
								</p>
							</div>
					</div>	
				</div>
				<a href="https://park-yerin-97.github.io/ogada/menu.html">자세히보기</a>
			</section>

			<!-- 프랜차이즈 -->
			<section id="franchise" class="clearfix">
				<h2 class="screen_out">프랜차이즈</h2>
				<div class="franchise_top">
					<img src="img/franchise-logo.png" alt="오가다 심볼 로고 디자인">
				</div>
				<div class="franchise_cont clearfix">
					<div class="franchise_left">
							<div class="franchise_pattern_left"></div>
							<div class="franchise_brand"></div>
							<div class="franchise_left_txt">
								<h3>토종 카페 브랜드</h3>
								<p>카페 오가다는 대한민국 커피 중심 프랜차이즈의 시장 속에서도 토종 카페 브랜드로서의 경쟁력을 보유하고 있습니다.</p>
							</div>	
					</div>
					<div class="franchise_right">
						<div class="franchise_right_txt">
							<h3>체계적인 가맹점 본사 시스템</h3>
							<p>체계적인 본사 시스템과 함께 전통에서 오는 멋스러움과 편안함을 고객들에게 전달하며 매출 상승에 적극적으로 기여합니다.</p>
						</div>
							<div class="franchise_system"></div>
							<div class="franchise_pattern_right"></div>
					</div>
				</div>
				<a href="#">자세히보기</a>
			</section>

			<!-- 이벤트 -->
			<section id="event" class="clearfix">
				<h2 class="screen_out">이벤트</h2>
				<div class="event_top">
					<iframe class="ogada_video" src="https://www.youtube.com/embed/vzkBkS0dY0M" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="event_bottom">
					<div class="event_bottom_slide">
							<div><img src="img/event01.jpg" alt="카페 오가다 리그렘 이벤트"></div>
							<div><img src="img/event02.jpg" alt="딥 초코 라떼 출시"></div>
							<div><img src="img/event03.jpg" alt="딸기를 담은 메뉴 출시"></div>
							<div><img src="img/event04.jpg" alt="인스타그램 인증샷 이벤트"></div>
							<div><img src="img/event05.jpg" alt="한글날 기념 메뉴 출시"></div>
							<div><img src="img/event06.jpg" alt="BLACK SESAME CAFE LATTE COMING SOON"></div>
							<div><img src="img/event07.jpg" alt="디저트 죽 메뉴 출시"></div>
							<div><img src="img/event08.jpg" alt="디저트 빙수 출시 COME BACK"></div>
					</div>
					<a href="#">자세히보기</a>
				</div>		
			</section>
		</main>

		<!--  footer -->
		<?php
      include('inc/footer.php');
    ?>
		
	</div>

	
</body>
</html>