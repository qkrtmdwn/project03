<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8" />
	<title>보건복지부</title>
	<link rel="stylesheet" href="../include/css/common_layout.css" />
	<link rel="stylesheet" href="../include/css/sub_common.css"/>
	<link rel="stylesheet" href="../include/css/admin.css" />
	<link rel="icon" type="image/png" sizes="16x16"  href="../include/images/favicons/favicon-16x16.png">
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/jquery-1.7.1.min.js"></script>
	<script src="../include/js/common.js"></script>
	<script src="../include/js/subcommon.js"></script>
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
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- id="leftMenu" -->
			<div id="rightContent" class="fr">
				<div id="contentTit" class="cf">
						<h2>관리자</h2>
						<ul class="cf">
							<li class="first"><a href="../sub03/sub03.php">관리자모드</a></li>
							<li><a href="../sub03/sub03.php">회원관리</a></li>
							<li class="last"><a href="../sub03/sub03.php">홈</a></li>
						</ul>
					</div><!--  id="contentTit" -->
				<div id="adminBox">
					<h3 id="memberTitle">회원관리</h3>
					<ul id="memberList">
						<li>
							<span class="col1">번호</span>
							<span class="col2">아이디</span>
							<span class="col3">이름</span>
							<span class="col4">레벨</span>
							<span class="col5">포인트</span>
							<span class="col6">가입일</span>
							<span class="col7">수정</span>
							<span class="col8">삭제</span>
						</li>
	<?php 
		$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
		$sql = "select * from members order by num desc";
		$result = mysqli_query($con, $sql);
		$total_record = mysqli_num_rows($result);

		$number = $total_record;

		while($row = mysqli_fetch_array($result))
		{
			$num = $row["num"];
			$id = $row["id"];
			$name = $row["name"];
			$level = $row["level"];
			$point = $row["point"];
			$regist_day = $row["regist_day"];
	?>
						<li>
							<form method="post" action="admin_member_update.php?num=<?=$num?>">
								<span class="col1"><?=$number?></span>
								<span class="col2"><?=$id?></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
								<span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
								<span class="col6"><?=$regist_day?></span>
								<span class="col7"><button type="submit">수정</button></span>
								<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></span>
							</form>
						</li>
	<?php 
			$number--;
		}
	?>
					</ul>
					<h3 id="memberTitle">
						게시판 관리
					</h3>
					<ul id="boardList">
						<li class="title">
							<span class="col1">선택</span>
							<span class="col2">번호</span>
							<span class="col3">이름</span>
							<span class="col4">제목</span>
							<span class="col5">첨부파일명</span>
							<span class="col6">작성일</span>
						</li>
						<form method="post" action="admin_board_delete.php">
	<?php
		$sql = "select * from board order by num desc";
		$result = mysqli_query($con, $sql);
		$total_record = mysqli_num_rows($result);

		$number = $total_record;

		while($row = mysqli_fetch_array($result))
		{
			$num = $row["num"];
			$name = $row["name"];
			$subject = $row["subject"];
			$file_name = $row["file_name"];
			$regist_day = $row["regist_day"];
			$regist_day = substr($regist_day, 0, 10);
	?>			
							<li>
								<span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
								<span class="col2"><?=$number?></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><?=$subject?></span>
								<span class="col5"><?=$file_name?></span>
								<span class="col6"><?=$regist_day?></span>
							</li>
	<?php 
			$number--;
		}
		mysqli_close($con);
	?>
							<button type="submit">선택된 글 삭제</button>
						</form>
					</ul>
				</div>
			</div> <!-- id="rightContent" -->
		</div><!-- id="content" -->
	</div>	<!-- id="sub2Ct"	  -->
		
	</section>
	<footer>
		<?php include"../include/footer.php";?>
	</footer>
</body>
</html>