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
	<title>QnA 게시판</title>
	<link rel="stylesheet" href="../include/css/common_layout.css"/>
	<link rel="stylesheet" href="../include/css/sub_common.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" sizes="16x16"  href="../include/images/favicons/favicon-16x16.png">
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>	
	<script src="../include/js/jquery-1.7.1.min.js"></script>	
	<script src="../include/js/common.js"></script>
	<script src="../include/js/subcommon.js"></script>
	<script src="js/script.js"></script>
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
						<h2>참여</h2>
					</div>
					<div class="menuList">
						<ul>
							<li><a href="#">제안신청</a>
								<ul class="menuContent">
									<li><a href="#">제안신청</a></li>
									<li><a href="#">나의제안확인</a></li>
									<li><a href="#">공개제안</a></li>
								</ul>
							</li>
							<li><a href="#">적극행정</a>
								<ul class="menuContent">
									<li><a href="#">제도소개</a></li>
									<li><a href="#">우수사례</a></li>
									<li><a href="#">우수공무원.정책 국민추천제등</a></li>
									<li><a href="#">소극행정신고</a></li>
								</ul>
							</li>
							<li><a href="#">규제개혁</a>
								<ul class="menuContent">
									<li><a href="#">규제개혁소개</a></li>
									<li><a href="#">규제개혁과제</a></li>
									<li><a href="#">자료실</a></li>
									<li><a href="#">규제개혁 신문고</a></li>
									<li><a href="#">규제입증 요청</a></li>
								</ul>
							</li>
							<li><a href="#">모범공직자추천</a>
								<ul class="menuContent">
									<li><a href="#">글작성</a></li>
									<li><a href="#">답글확인</a></li>
								</ul>
							</li>
							<li><a href="#">설문/토론/공청회</a>
								<ul class="menuContent">
									<li><a href="#">설문조사</a></li>
									<li><a href="#">정책토론</a></li>
									<li><a href="#">전자공청회</a></li>
								</ul>
							</li>
							<li><a href="#">장관과의대화</a>
								<ul class="menuContent">
									<li><a href="#">글작성</a></li>
									<li><a href="#">답글확인</a></li>
								</ul>
							</li>
							<li><a href="#">나눔문화</a>
								<ul class="menuContent">
									<li><a href="#">대한민국 나눔국민대상</a></li>
									<li><a href="#">대한민국 나눔국민대상 국민공모</a></li>
									<li><a href="#">홍보영상</a></li>
								</ul>
							</li>
							<li><a href="sub06.php">QnA 게시판</a></li>
						</ul>
					</div>
				</div><!-- id="leftMenu" -->
				<div id="rightContent" class="fr">
						<div id="contentTit" class="cf">
						<h2>QnA 게시판</h2>
						<ul class="cf">
							<li class="first"><a href="../sub03/sub03.php">QnA 게시판</a></li>
							<li><a href="../sub03/sub03.php">참여</a></li>
							<li class="last"><a href="../sub03/sub03.php">홈</a></li>
						</ul>
						</div><!--  id="contentTit" -->
					<div id="contentDt">
						<input type="text" name="search2" class="guide" value="검색어를 입력하세요."/>
						<select name="search2" id="search2">
							<option value="제목">제목</option>
							<option value="내용">내용</option>
							<option value="글쓴이">작성자</option>
						</select>
					</div> <!-- id="contData" -->
					<div id="mainCont">
						<div id="conTit">
							<div class="first fl cf">
								<div class="title1 fl"><span>번호</span></div>
								<div class="title2 fl"><span>제목</span></div>
								<div class="title3 fl"><span>작성자</span></div>
								<div class="title4 fl"><span>등록일</span></div>
								<div class="title5 fl"><span>조회수</span></div>
							</div>
						</div>
						<div id="conSection">
							
						</div>
						<div id="confooter" class="cf">
							<div class="prev">이전</div>
							<div>1</div>
							<div class="active">2</div>
							<div>3</div>
							<div>4</div>
							<div>5</div>
							<div class="next">다음</div>
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