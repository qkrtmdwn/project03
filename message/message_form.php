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
	  function checkInput() {
	  	  if (!document.message_form.rv_id.value.trim())
	      {
	          alert("수신 아이디를 입력하세요!");
	          document.message_form.rv_id.focus();
	          return;
	      }
	      if (!document.message_form.subject.value.trim())
	      {
	          alert("제목을 입력하세요!"); 
	          document.message_form.subject.focus();
	          return;
	      }
	      if (!document.message_form.content.value.trim())
	      {
	          alert("내용을 입력하세요!");    
	          document.message_form.content.focus();
	          return;
	      }
	      document.message_form.submit();
	   }
	</script>
</head>
<body> 
<header>
	<?php include "../include/header.php";?>
</header>  
<?php
	if (!$userid )
	{
		echo("<script>
				alert('로그인 후 이용해주세요!');
				history.go(-1);
				</script>
			");
		exit;
	}
?>
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
								<ul class="menuContent sub1">
									<li><a href="#">제안신청</a></li>
									<li><a href="#">나의제안확인</a></li>
									<li><a href="#">공개제안</a></li>
								</ul>
							</li>
							<li><a href="#">적극행정</a>
								<ul class="menuContent sub2">
									<li><a href="#">제도소개</a></li>
									<li><a href="#">우수사례</a></li>
									<li><a href="#">우수공무원.정책 국민추천제등</a></li>
									<li><a href="#">소극행정신고</a></li>
								</ul>
							</li>
							<li><a href="#">규제개혁</a>
								<ul class="menuContent sub3">
									<li><a href="#">규제개혁소개</a></li>
									<li><a href="#">규제개혁과제</a></li>
									<li><a href="#">자료실</a></li>
									<li><a href="#">규제개혁 신문고</a></li>
									<li><a href="#">규제입증 요청</a></li>
								</ul>
							</li>
							<li><a href="#">모범공직자추천</a>
								<ul class="menuContent sub4">
									<li><a href="#">글작성</a></li>
									<li><a href="#">답글확인</a></li>
								</ul>
							</li>
							<li><a href="#">설문/토론/공청회</a>
								<ul class="menuContent sub5">
									<li><a href="#">설문조사</a></li>
									<li><a href="#">정책토론</a></li>
									<li><a href="#">전자공청회</a></li>
								</ul>
							</li>
							<li><a href="#">장관과의대화</a>
								<ul class="menuContent message">
									<li><a href="message_form.php">글작성</a></li>
									<li><a href="#">답글확인</a></li>
								</ul>
							</li>
							<li><a href="#">나눔문화</a>
								<ul class="menuContent sub7">
									<li><a href="#">대한민국 나눔국민대상</a></li>
									<li><a href="#">대한민국 나눔국민대상 국민공모</a></li>
									<li><a href="#">홍보영상</a></li>
								</ul>
							</li>
							<li><a href="#">자유게시판</a></li>
						</ul>
					</div>
				</div><!-- id="leftMenu" -->
				<div id="rightContent" class="fr">
					<div id="contentTit" class="cf">
						<h2>글작성</h2>
						<ul class="cf">
							<li class="first"><a href="../sub01/sub01.php">글작성</a></li>
							<li><a href="../sub01/sub01.php">장관과의대화</a></li>
							<li><a href="../sub01/sub01.php">참여</a></li>
							<li class="last"><a href="../sub01/sub01.php">홈</a></li>
						</ul>
					</div><!--  id="contentTit" -->
					<div id="mainCont">
						<div id="messageBox">
						    <h3 id="writeTitle">
						    		쪽지 보내기
							</h3>
							<ul class="toButtons">
									<li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
									<li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
							</ul>
						    <form  name="messageForm" method="post" action="message_insert.php?send_id=<?=$userid?>">
						    	<div id="writeMsg">
						    	    <ul>
										<li>
											<span class="col1">보내는 사람 : </span>
											<span class="col2"><?=$userid?></span>
										</li>	
										<li>
											<span class="col1">수신 아이디 : </span>
											<span class="col2"><input name="rv_id" type="text"></span>
										</li>	
							    		<li>
							    			<span class="col1">제목 : </span>
							    			<span class="col2"><input name="subject" type="text"></span>
							    		</li>	    	
							    		<li id="textArea">	
							    			<span class="col1">내용 : </span>
							    			<span class="col2">
							    				<textarea name="content"></textarea>
							    			</span>
							    		</li>
						    	    </ul>
					    	    	<button type="button" onclick="checkInput()">보내기</button>
						    	</div>	    	
						    </form>
						</div> <!-- message_box -->
					</div> <!-- id="mainCont" -->
				</div> <!-- id="rightContent" -->
			</div><!-- id="content" -->
		</div> <!-- id="sub2Ct" -->
</section> 
<footer>
	<?php include "../include/footer.php";?>
</footer>
</body>
</html>