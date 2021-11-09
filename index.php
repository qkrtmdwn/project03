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
	<title>보건복지부</title>
	<link rel="stylesheet" href="include/css/common_layout.css"/>
	<link rel="stylesheet" href="include/css/style.css"/>
	<link rel="icon" type="image/png" sizes="16x16"  href="include/images/favicons/favicon-16x16.png">
	<script src="include/js/html5div.js"></script>
	<script src="include/js/html5shiv.js"></script>
	<script src="include/js/jquery-1.9.1.min.js"></script>
	<script src="include/js/jquery.easing.1.3.min.js"></script>
	<script src="include/js/common.js"></script>
	<script src="include/js/main.js"></script>
	<script src="include/js/count.js"></script>
	<script>
	    window.open("pop.html", "", "resizable=no, toolbar=no, width=450, height=637")

	    var tid;
			var cnt = parseInt(5);//초기값(초단위)
			
			function counterInit() {
				tid = setInterval(function(){
					counterRun();
				}, 1000);
			};

			function counterReset(){
				clearInterval(tid);
				cnt = parseInt(60);
				counterInit();
			};

			function counterRun(){
				document.getElementById("counter").innerText = timeFormat(cnt);
				cnt--;
				if(cnt < 0) {
					clearInterval(tid);
					self.location = "login/login_form.php";
				}
			};
			function timeFormat(s) {
				var nHour=0;
				var nMin=0;
				var nSec=0;
				if(s>0) {
					nMin = parseInt(s/60);
					nSec = s%60;

					if(nMin>60) {
						nHour = parseInt(nMin/60);
						nMin = nMin%60;
					}
				} 
				if(nSec<10) nSec = "0"+nSec;
				if(nMin<10) nMin = "0"+nMin;

				return ""+nHour+":"+nMin+":"+nSec;
			};
			counterInit();
    </script>
</head>
<body >
	<div class="popup">
		<div class="popContent">
			<img src="include/images/popup.png" width="600" alt="팝업이미지"/> 
			<button>닫기</button>
		</div>
	</div>
	<span class="quick"><span class="indent">퀵메뉴닫기</span></span>
	<div class="quickmenu">
		<ul>
			<li class="first"><a href="#">Quick Menu</a></li>
			<li><a href="../sub01/sub01.php">적극행정</a></li>
			<li><a href="../sub02/sub02.php">민원이용안내</a></li>
			<li><a href="../sub03/sub03.php">자유게시판</a></li>
			<li><a href="../sub04/sub04.php">카드뉴스</a></li>
			<li><a href="../sub05/sub05.php">쪽지쓰기</a></li>
			<li><a href="../sub06/sub06.php">QnA게시판</a></li>
			<li><a href="../login/login_form.php">로그인</a></li>
		</ul>
	</div>
	<div class="eventWrap">
		<div class="event">
			<p>코로나19 예방접종 백신예약</p>
			<div class="button"><img src="include/images/top_close.png" width="20" alt="닫기"/></div>
		</div>
	</div>
	<header>
		<?php include "./header.php";?>
	</header>
	<section>
		<?php include "./main.php";?>
	</section>
	<footer>
		<?php include "./footer.php";?>
	</footer>
</body>
</html>