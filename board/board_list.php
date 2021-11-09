<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8" />
	<title>보건복지부</title>
	<link rel="stylesheet" href="../include/css/common_layout.css" />
	<link rel="stylesheet" href="../include/css/sub_common.css"/>
	<link rel="stylesheet" href="../include/css/board.css" />
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
						<h2>목록</h2>
						<ul class="cf">
							<li class="first"><a href="../sub03/sub03.php">목록</a></li>
							<li><a href="../sub03/sub03.php">게시판</a></li>
							<li><a href="../sub03/sub03.php">참여</a></li>
							<li class="last"><a href="../sub03/sub03.php">홈</a></li>
						</ul>
					</div><!--  id="contentTit" -->
					<div id="boardBox">
						<ul id="boardList">
							<li>
								<span class="col1">번호</span>
								<span class="col2">제목</span>
								<span class="col3">글쓴이</span>
								<span class="col4">첨부</span>
								<span class="col5">등록일</span>
								<span class="col6">조회</span>
							</li>
	<?php 
		if (isset($_GET["page"]))
			$page = $_GET['page'];
		else
			$page = 1;

		$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
		$sql = "select * from board order by num desc";
		$result = mysqli_query($con, $sql);
		$total_record = mysqli_num_rows($result);

		$scale = 10;

		//전체 페이지 수 ($total_page) 계산
		if($total_record % $scale == 0)
			$total_page = floor($total_record/$scale);
		else
			$total_page = floor($total_record/$scale) +1;

		//표시할 페이지($page)에 따라 $start 계산
		$start = ($page -1) * $scale;

		$number = $total_record - $start;

		for($i=$start; $i<$start+$scale && $i < $total_record; $i++)
		{
			mysqli_data_seek($result, $i);
			//가져올 레코드로 위치(포인터) 이동
			$row =mysqli_fetch_array($result);
			//하나의 레코드 가져오기
			$num = $row["num"];
			$id = $row["id"];
			$name = $row["name"];
			$subject = $row["subject"];
			$regist_day = $row["regist_day"];
			$hit = $row["hit"];
			if($row["file_name"])
				$file_image = "<img src='../img/file.gif'>";
			else
				$file_image = " ";
	?>
							<li>
								<span class="col1"><?=$number?></span>
								<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><?=$file_image?></span>
								<span class="col5"><?=$regist_day?></span>
								<span class="col6"><?=$hit?></span>
							</li>
	<?php 
			$number--;
		}
		mysqli_close($con);
	?>
			</ul>
			<ul id="pageNum">
	<?php
		if ($total_page>=2 && $page >= 2)
		{
			$new_page = $page-1;
			echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a></li>";
		}
		else
			echo "<li>&nbsp;</li>";

		//게시판 목록 하단에 페이지 링크 번호 출력
		for($i=1; $i<=$total_page; $i++)
		{
			if($page == $i)	//현재 페이지 번호 링크 안함
			{
				echo "<li><b>$i</b></li>";
			}
			else
			{
				echo "<li><a href='board_list.php?page=$i'>$i</a></li>";
			}
		}
		if ($total_page>=2 && $page != $total_page)
		{
			$new_page = $page+1;
			echo "<li><a href='board_list.php?page=$new_page'>다음 ▶</a></li>";
		}
		else
			echo "<li>&nbsp;</li>";
	?>			
						</ul>
						<ul class="buttons">
							<li><button onclick="location.href = 'board_list.php'">목록</button></li>
							<li>
	<?php
		if($userid){
	?>
								<button onclick="location.href = 'board_form.php'">글쓰기</button>
	<?php  
		} else {
	?>
								<a href="javascript:alert('로그인 후 이요해 주세요')"><button>글쓰기</button></a>
	<?php 
		}
	?>
							</li>
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