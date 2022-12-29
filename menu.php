<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link href="img/favicon.ico" rel="shortcut icon" type="image/icon">
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<title>CAFE 오가다</title>
  	<!-- [if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script>
			alert("현재 브라우저는 지원하지 않습니다. 크롬브라우저를 추천합니다.")
		</script>
	<![endif]-->
  <script src="js/jquery-3.6.1.min.js"></script>
	<script src="js/menu.js"></script>
</head>
<body>
  <div id="wrap">
		<!-- header -->
    <?php include('inc/header.php'); ?>

		<!-- sub02_visual -->
		<div id="sub02_visual">
			<div class="sub02_visual_box">
				<div class="sub02_vusual_txt">
					<h2>
						<span>cafe 오가다</span>
						<br>
						정성스러운 메뉴
					</h2>
				</div>
			</div>
		</div>
		
		<!-- nav -->
		<nav class="sub02_nav">
			<h2 class="screen_out">menu_nav</h2>
			<ul class="menu_nav clearfix">
				<li class="on"><a href="#">코리안티</a></li>
				<li><a href="#">커피</a></li>
				<li><a href="#">스무디</a></li>
				<li><a href="#">디저트</a></li>
			</ul>
		</nav>

		<!-- main -->
		<main>
			<!-- tea_menu -->
				<section class="menu">
					<div class="menu_inner">
						<div class="title">
							<h2>Korean tea</h2>
							<p>오가다 차는 산지 농장과의 계약 재배를 통해 건강한 원재료를 사용하고 있습니다.</p>
						</div>
						<ul class="clearfix">
							<li>
								<div class="ssang">
									<img src="img/ssanghwa.png" alt="쌍화차">
									<div class="menu_txt">
										<strong>쌍화차</strong>
										<p>Ssangwha</p>
										<button type="button" class="detail">자세히 보기</button>
									</div>
									
									<div class="slide_box">
										<div class="inner_box">
											<div class="menu_close_box">
												<button type="button"
												class="close">close</button>
											</div>
											<div class="ssang_slide_img"></div>
											<div class="tea_slide_txt">
												<strong>쌍화</strong>
												<p>몸의 기운을 북돋는 다양한 한약재의 
													깊고 은은한 단맛과 계피의 엣지있는 
													향미가 어우러지며, 고소한 잣과 말린 
													대추, 통통한 밤의 든든한 식감까지 한껏 
													살려서 더욱 푸근한 카페 오가다의 
													시그니쳐 한방차 입니다.
												</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li >
								<div class="mogha">
									<img src="img/mogha.png" alt="모과유자차">
									<div class="menu_txt">
										<strong>모과유자차</strong>
										<p>MoghaYuja</p>
										<button type="button" class="detail">자세히 보기</button>
									</div>
									
									<div class="slide_box">
										<div class="inner_box">
											<div class="menu_close_box">
												<button type="button"
												class="close">close</button>
											</div>
											<div class="mogha_slide_img"></div>
											<div class="tea_slide_txt">
												<strong>모과유자</strong>
												<p>따뜻한 햇살과 해풍을 맞으며 여문
													국내산 유자와 모과를 오가다만의 
													황금비율로 블렌딩하여 달콤하면서도 
													새콤한 맛과 쌉싸름한 향이 조화를
													이루는 한방차입니다. 예쁜 연노랑빛의 
													차에 얹은 타임이 청량감을 더해줍니다.
												</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="halla">
									<img src="img/halla.png" alt="한라봉오미자차">
									<div class="menu_txt">
										<strong>한라봉오미자차</strong>
										<p>HanrabongOmija</p>
										<button type="button" class="detail">자세히 보기</button>
									</div>
									
									<div class="slide_box">
										<div class="inner_box">
											<div class="menu_close_box">
												<button type="button"
												class="close">close</button>
											</div>
											<div class="halla_slide_img"></div>
											<div class="tea_slide_txt">
												<strong>한라봉오미자</strong>
												<p>제주에서 올라온 한라봉 특유의 단맛과 
													향미, 그리고 톡톡 튀는 과육에 오미자의 
													붉은빛과 새콤함이 더해져서 신비롭고 
													향긋한 한방차로 레몬칩과 레드커런트로 
													새콤한 향과 풍미를  더했습니다. 
													출시 이후 오가다의 베스트셀러 
													메뉴입니다.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="pear">
									<img src="img/pear.png" alt="배도라지차">
									<div class="menu_txt">
										<strong>배도차지차</strong>
										<p>Bellflower</p>
										<button type="button" class="detail">자세히 보기</button>
									</div>
									
									<div class="slide_box">
										<div class="inner_box">
											<div class="menu_close_box">
												<button type="button"
												class="close">close</button>
											</div>
											<div class="pear_slide_img"></div>
											<div class="tea_slide_txt">
												<strong>배도라지</strong>
												<p>배의 풍부한 천연 단맛에 기관지에 좋은 
													도라지의 쌉싸래하고 구수한 맛과 생강과 
													계피 스틱의 매큼한 향이 살짝 더해져서 
													깔끔하게 마무리되는 한방차로 깊은 
													황금색의 맑고 예쁜 빛깔이 특징적인 
													한방차입니다.</p>
											</div>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="pome">
									<img src="img/pome.png" alt="석류오미자차">
									<div class="menu_txt">
										<strong>석류오미자차</strong>
										<p>PomegranateOmija</p>
										<button type="button" class="detail">자세히 보기</button>
									</div>
									
									<div class="slide_box">
										<div class="inner_box">
											<div class="menu_close_box">
												<button type="button"
												class="close">close</button>
											</div>
											<div class="pome_slide_img"></div>
											<div class="tea_slide_txt">
												<strong>석류오미자</strong>
												<p>루비를 닮은 붉은 빛깔부터 새콤달콤한
													맛과 향을 자랑하는 석류, 오미자,
													산수유, 복분자 등 비타민, 항산화 물질 
													가득한 ‘상콤 열매’들로 구성된 
													한방차입니다. 레드커런트와 타임이 
													얹어져풍부한 향미가 배가됩니다.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
						 
						</ul>
					</div>
					</section>			
				<!-- tea_menu end -->
				
				<!-- coffee_menu -->
				<section class="menu">
					<div class="menu_inner">
						<div class="title">
							<h2>Coffee</h2>
							<p>카페 오가다의 블렌딩 원두는
								브라질, 콜롬비아, 에티오피아, 인도네시아 원두를
								최적의 비율로 블렌딩하여 깔끔한 여운을 남깁니다.</p>
						</div>
						<ul class="clearfix">
							<li>
								<div class="amer">
									<img src="img/americano.png" alt="아메리카노">
									<div class="menu_txt">
										<strong>아메리카노</strong>
										<p>Americano</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="latte">
									<img src="img/caffelatte.png" alt="카페라떼">
									<div class="menu_txt">
										<strong>카페라떼</strong>
										<p>CaffeLatte</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="moca">
									<img src="img/cafemoca.png" alt="카페모카">
									<div class="menu_txt">
										<strong>카페모카</strong>
										<p>CafeMocha</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="milk">
									<img src="img/milk.png" alt="연유라떼">
									<div class="menu_txt">
										<strong>연유라떼</strong>
										<p>MilkLatte</p>
										<button type="button">자세히 보기</button>
									</div>
								</div>
							</li>
							<li>
								<div class="vanilla">
									<img src="img/vanilla.png" alt="바닐라라떼">
									<div class="menu_txt">
										<strong>바닐라라떼</strong>
										<p>VanillaLatte</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- coffee_menu end -->
				
				<!-- smoothie_menu-->
				<section class="menu">
					<div class="menu_inner">
						<div class="title">
							<h2>Smoothie</h2>
							<p>전통음료와 한국의 특산물 원재료를
								현대적으로 맛있게 해석했습니다.</p>
						</div>
						<ul class="clearfix">
							<li>
								<div class="rice">
									<img src="img/sikhye.png" alt="전통 식혜 스무디">
									<div class="menu_txt">
										<strong>전통 식혜 스무디</strong>
										<p>Sweet Rice Smoothie</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="hongsi">
									<img src="img/hongsi.png" alt="청도 홍시 스무디">
									<div class="menu_txt">
										<strong>청도 홍시 스무디</strong>
										<p>Persimmon Smoothie</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="injeolmi">
									<img src="img/injeolmi.png" alt="인절미 스무디">
									<div class="menu_txt">
										<strong>인절미 스무디</strong>
										<p>Injeolmi Smoothie</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="blueberry">
									<img src="img/blueberry.png" alt="블루베리 요거트">
									<div class="menu_txt">
										<strong>블루베리 요거트</strong>
										<p>Blueberry Yogurt</p>
										<button type="button">자세히 보기</button>
									</div>
								</div>
							</li>
							<li>
								<div class="mango">
									<img src="img/mango.png" alt="망고 요거트">
									<div class="menu_txt">
										<strong>망고 요거트</strong>
										<p>Mango Yogurt</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="strawberry">
									<img src="img/strawberry.png" alt="딸기 요거트">
									<div class="menu_txt">
										<strong>딸기 요거트</strong>
										<p>Strawberry Yogurt</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- smoothie_menu end -->

				<!-- dessert_menu-->
				<section class="menu">
					<div class="menu_inner">
						<div class="title">
							<h2>Dessert</h2>
							<p>차와 커피 모두 잘어울리는
								오가다만의 디저트를 완성하였습니다.
							</p>
						</div>
						<ul class="clearfix">
							<li>
								<div class="milk_snow">
									<img src="img/dessert-snowMilk.png" alt="밀크 팥빙수">
									<div class="menu_txt">
										<strong>밀크 팥빙수</strong>
										<p>Milk Snow</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="injeolmi_snow">
									<img src="img/dessert-injeolmi.png" alt="인절미 팥빙수">
									<div class="menu_txt">
										<strong>인절미 팥빙수</strong>
										<p>Injeolmi Snow </p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="strawberry_snow">
									<img src="img/dessert-strawberry.png" alt="딸기 팥빙수">
									<div class="menu_txt">
										<strong>딸기 팥빙수</strong>
										<p>Strawberry Snow </p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="carrot">
									<img src="img/dessert_carrot.png" alt="당근 케이크">
									<div class="menu_txt">
										<strong>당근 케이크</strong>
										<p>Carrot Cake</p>
										<button type="button">자세히 보기</button>
									</div>
								</div>
							</li>
							<li>
								<div class="cheese">
									<img src="img/dessert-cheese.png" alt="더블치즈 케이크">
									<div class="menu_txt">
										<strong>더블치즈 케이크</strong>
										<p>Cheese Cake </p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
							<li>
								<div class="tiramisu">
									<img src="img/dessert-tiramisu.png" alt="티라미수 케이크">
									<div class="menu_txt">
										<strong>티라미수 케이크</strong>
										<p>Tiramisu Cake</p>
										<button type="button">자세히 보기</button>
									</div>							
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- dessert_menu end-->

		</main>

		<!--  footer -->
  	<?php include('inc/footer.php'); ?>
  
	</div>

</body>
</html>