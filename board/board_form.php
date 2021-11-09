<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8" />
	<title>보건복지부</title>
	<link rel="stylesheet" href="../include/css/common_layout.css" />
	<link rel="stylesheet" href="../include/css/sub_common.css"/>
	<link rel="stylesheet" href="../include/css/message.css" />
	<link rel="icon" type="image/png" sizes="16x16"  href="../include/images/favicons/favicon-16x16.png">
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/jquery-1.7.1.min.js"></script>
	<script src="../include/js/common.js"></script>
	<script src="../include/js/subcommon.js"></script>
	<script>
	  function check_input() {
	      if (!document.board_form.subject.value.trim())
	      {
	          alert("제목을 입력하세요!");
	          document.board_form.subject.focus();
	          return;
	      }
	      if (!document.board_form.content.value.trim())
	      {
	          alert("내용을 입력하세요!");    
	          document.board_form.content.focus();
	          return;
	      }
	      document.board_form.submit();
	   }
	</script>
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
				<div class="loginBox">
					<p>회원정보</p>
					<p><span class="bold">박승주</span>님<span class="font"></span></p>
					<div class="memberInfo cf">
						<ul>
							<li class="pdr"><a href="#">내글 :</a><span class="num3"><a href="#"> 5개</a></span></li>
							<li><a href="#">답변 :</a><span class="num4"><a href="#"> 8개</a></span></li>
						</ul>
					</div>
					<div class="logoutBottom cf">
						<ul class="cf">
							<li class="pdr"><a href="#">로그아웃</a></li>
							<li><a href="#">회원정보수정</a></li>
						</ul>
					</div>
				</div><!-- id="loginBox -->
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
						<li><a href="sub03.php">자유게시판</a></li>
					</ul>
				</div>
			</div><!-- id="leftMenu" -->
			<div id="rightContent" class="fr">
				<div id="contentTit" class="cf">
					<h2>자유게시판</h2>
					<ul class="cf">
						<li class="first"><a href="../sub03/sub03.php">자유게시판</a></li>
						<li><a href="../sub03/sub03.php">참여</a></li>
						<li class="last"><a href="../sub03/sub03.php">홈</a></li>
					</ul>
				</div><!--  id="contentTit" -->
				<form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
		    	    <ul id="board_form">
						<li>
							<span class="col1">이름 : </span>
							<span class="col2"><?=$username?></span>
						</li>	
						<li>
							<span class="col1">제목 : </span>
							<span class="col2"><input name="subject" type="text"></span>
						</li>    	
			    		<li id="text_area">	
			    			<span class="col1">내용 : </span>
			    			<span class="col2">
			    				<textarea name="content"></textarea>
			    			</span>
			    		</li>
			    		<li>	
			    			<span class="col1">첨부 파일</span>
			    			<span class="col2"><input name="upfile" type="file"></span>
			    		</li>
		    	    </ul>
			    	<ul class="buttons">
			    		<li><button type="button" onclick="check_input()">완료</button></li>
			    		<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			    	</ul>
			    </form>
			</div> <!-- id="rightContent" -->
		</div><!-- id="content" -->
	</div>	<!-- id="sub2Ct"	  -->
   	<div id="board_box">
	    <h3 id="board_title">
	    	게시판 > 글 쓰기
		</h3>
	    
	</div> <!-- message_box -->
</section> 
<footer>
	<?php include "../include/footer.php";?>
</footer>
</body>
</html>