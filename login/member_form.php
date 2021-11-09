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
	<title>회원가입</title>
	<link rel="stylesheet" href="../include/css/common_layout.css"/>
	<link rel="stylesheet" href="../include/css/sub_common.css"/>
	<link rel="stylesheet" href="../include/css/member.css"/>
	<link rel="icon" type="image/png" sizes="16x16"  href="../include/images/favicons/favicon-16x16.png">
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>	
	<script src="../include/js/jquery-1.7.1.min.js"></script>	
	<script src="../include/js/common.js"></script>
	<script src="../include/js/subcommon.js"></script>
	<script>
	function checkInput()
	{
		if(!document.memberForm.id.value.trim()){
			alert("아이디를 입력하세요!");
			document.memberForm.id.focus();  
			return;
		}
		if(!document.memberForm.pass.value.trim()){
			alert("비밀번호를 입력하세요!");
			document.memberForm.pass.focus();
			return;
		}
		if(!document.memberForm.passContirm.value.trim()){
			alert("비밀번호확인을 입력하세요!");
			document.memberForm.passContirm.focus();
			return;
		}
		if(!document.memberForm.name.value.trim()){
			alert("이름을 입력하세요!");
			document.memberForm.name.focus();
			return;
		}
		if(!document.memberForm.email1.value.trim()){
			alert("이메일 주소를 입력하세요!");
			document.memberForm.email1.focus();
			return;
		}
		if(!document.memberForm.email2.value.trim()){
			alert("이메일 주소를 입력하세요!");
			document.memberForm.email2.focus();
			return;
		}
		
		if(document.memberForm.pass.value.trim() != document.memberForm.passContirm.value.trim())
		{
			alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요!");
			document.memberForm.pass.focus();
			// select()를 사용하여 블럭지정
			document.memberForm.pass.select();
			return;
		}
		
		document.memberForm.submit();
	}

	function checkInput2() 
    {
	    if (!document.membarForm.id.value)
	    {
	        alert("아이디를 입력하세요");    
	        document.membarForm.id.focus();
	        return;
	    }

	    if (!document.membarForm.pass.value)
	    {
	        alert("비밀번호를 입력하세요");    
	        document.membarForm.pass.focus();
	        return;
	    }
	    document.memberForm.submit();
    }

	function resetForm(){
		document.memberForm.id.value = "";
		document.memberForm.pass.value = "";
		document.memberForm.passContirm.value = "";
		document.memberForm.name.value = "";
		document.memberForm.email1.value = "";
		document.memberForm.email2.value = "";
		document.memberForm.id.focus();
		return;
	}
	
	function checkId(){
		window.open("member_check_id.php?id=" + document.memberForm.id.value,
			"IDcheck",
			"left=700, top=300, width=350, height=200, scrollbars=no, resizable-yes");
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
						<h2>회원관리</h2>
					</div>
					<div class="menuList">
						<ul>
							<li><a href="#">회원관리</a>
								<ul class="menuContent">
									<li><a href="#">로그인</a></li>
									<li><a href="sub07.php">회원가입</a></li>
									<li><a href="#">아이디/비밀번호 찾기</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- id="leftMenu" -->
				<div id="rightContent" class="fr">
					<div id="contentTit" class="cf">
					<h2>회원가입</h2>
					<ul class="cf">
						<li class="first"><a href="../sub03/sub03.php">회원가입</a></li>
						<li><a href="../sub03/sub03.php">회원관리</a></li>
						<li class="last"><a href="../sub03/sub03.php">홈</a></li>
					</ul>
					</div><!--  id="contentTit" -->
					<div id="mainCont">
						<div id="joinBox">
							<form name="memberForm" method="post" action="member_insert.php">
								<div class="form id">
									<div class="col1">아이디</div>
									<div class="col2">
										<input type="text" name="id"/>
									</div>
									<div class="col3">
										<a href="#"><div onclick="checkId()">중복확인</div></a>
									</div>
								</div>	
								<div class="clear"></div>
								
								<div class="form">
									<div class="col1">비밀번호</div>
									<div class="col2">
										<input type="password" name="pass"/>
									</div>
								</div>
								<div class="clear"></div>
								
								<div class="form">
									<div class="col1">비밀번호 확인</div>
									<div class="col2">
										<input type="password" name="passContirm"/>
									</div>
								</div>
								<div class="clear"></div>
								
								<div class="form">
									<div class="col1">이름</div>
									<div class="col2">
										<input type="text" name="name"/>
									</div>
								</div>
								<div class="clear"></div>
								
								<div class="form">
									<div class="col1">이메일</div>
									<div class="col2">
										<input type="text" name="email1"/>@<input type="text" name="email2"/>
									</div>
								</div>
								<div class="clear"></div>
								
								<div class="bottomLine"> </div>
								<div class="buttons cf">
									<div style="cursor:pointer" onclick="checkInput()" onclick="checkInput2()">저장하기</div>
									<div id="reset_button" style="cursor:pointer" onclick="resetForm()">취소하기</div>
								</div>
							</form>
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