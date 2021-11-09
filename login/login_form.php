<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=1600">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="박승주"/>
	<meta name="Keywords" content="박승주,parkseungju, 포트폴리오, 박승주 포트폴리오, portfolio, seungju's portfolio"/>
	<meta name="Description" content="박승주의 포트폴리오 페이지 입니다"/>
	<title>로그인</title>
	<link rel="stylesheet" href="../include/css/common_layout.css"/>
	<link rel="stylesheet" href="../include/css/sub_common.css"/>
	<link rel="stylesheet" href="../include/css/login.css"/>
	<link rel="icon" type="image/png" sizes="16x16"  href="../include/images/favicons/favicon-16x16.png">
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>	
	<script src="../include/js/jquery-1.7.1.min.js"></script>	
	<script src="../include/js/common.js"></script>
	<script src="../include/js/subcommon.js"></script>
	<script src="../include/js/login.js"></script>
</head>
<body>
	<header>
		<?php include "../include/header.php";?>
	</header>
	<section>
		<div id="sub2Ct">
			<div id="content" class="cf"> 
				<div id="leftMenu" class="fl">
					<div class="menuTitle">
						<h2>회원관리</h2>
					</div>
					<div class="menuList">
						<ul>
							<li><a href="#">회원관리</a>
								<ul class="menuContent">
									<li><a href="sub07.php">로그인</a></li>
									<li><a href="#">회원가입</a></li>
									<li><a href="#">아이디/비밀번호 찾기</a></li>
									<li><a href="#">정보수정</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- id="leftMenu" -->
				<div id="rightContent" class="fr">
					<div id="contentTit" class="cf">
					<h2>로그인</h2>
					<ul class="cf">
						<li class="first"><a href="../sub03/sub03.php">로그인</a></li>
						<li><a href="../sub03/sub03.php">회원관리</a></li>
						<li class="last"><a href="../sub03/sub03.php">홈</a></li>
					</ul>
					</div><!--  id="contentTit" -->
					<div id="mainCont">
						<div class="loginbox cf">
							<div class="guide">
								<h3>로그인 안내</h3>
								<p>면허(자격)증 재발급 신청, 증명서 신청 및 증명서 온라인 발급시에는 간편인증 또는 공동인증서 로그인을 통하여 의료인 본인인증 후 신청이 가능합니다.</p>
								<p>의료인 본인인증을 진행할 수단을 선택하세요.</p>
								<p>의신청시 주민등록번호 입력은 본인확인을 위한 용도로만 사용하고, 별도로 저장되지 않음을 알려드립니다.</p>
							</div>
							<div class="idlogin fl">
							<h4>아이디 로그인</h4>
								<form class="loginForm" action="login.php" name="login_form" method="post">
									<fieldset class="cf">
										<div class="login">
											<p class="cf">
												<label for="id" class="labelStyle">아이디</label>
												<input type="id" id="id" name="id" value="tmdwn" />
											</p>
											<p class="cf">
												<label for="pass" class="labelStyle">비밀번호</label>
												<input type="password" id="pass" value="1234" name="pass"/>
											</p>
										</div>
										<input type="submit" value="로그인하기" id="btnLogin" onclick="checkInput()"/>
										<p class="btn1 cb">
											<input type="checkbox" id="saveId" value="savedIdYes" />
											<label for="saveId">아이디저장</label>	
											<input type="checkbox" id="secure" value="secureYes" />
											<label for="secure">보안접속</label>	
										</p>
										<p class="btn2">
											<input type="button" value="회원가입" id="btnJoin" />
											<input type="button" value="아이디/비밀번호 찾기" id="btnSearch" />
										</p>
									</fieldset>
								</form>
							</div>
							<div class="certifylogin fl">
								<h4>공동인증서 로그인</h4>
								<form class="loginForm">
									<fieldset>
										<!-- <p>
											<label for="">주민등록번호</label>
											<input type="text"/>
											<input type="text"/>
										</p> -->
										<input type="button" id="btnLogin" value="공동인증서로 로그인하기"/>
										<input type="button" id="btnLogin" value="브라우저 인증서 로그인"/>
										<p>공동인증서 로그인을 하시려면 회원가입 후
										아이디 로그인하여 공동인증서를 등록하셔야이용가능합니다.</p>
										<p>공동인증서 등록은 아이디 로그인 후 [회원부가정보입력]에서 가능합니다.</p>
									</fieldset>
								</form>
							</div>
						</div>
					</div> <!-- id="mainCont" -->
				</div> <!-- id="rightContent" -->
			</div><!-- id="content" -->
		</div>	<!-- id="sub2Ct"	  -->
	</section>
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>