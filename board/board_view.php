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
		<?php 
			$num = $_GET["num"];
			$page = $_GET["page"];

			$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
			$sql = "select * from board where num=$num";
			$result = mysqli_query($con, $sql);

			$row = mysqli_fetch_array($result);
			$id = $row['id'];
			$name = $row['name'];
			$regist_day = $row['regist_day'];
			$subject = $row['subject'];
			$content = $row['content'];
			$file_name = $row['file_name'];
			$file_type = $row['file_type'];
			$file_copied = $row['file_copied'];
			$hit = $row['hit'];
		
			$content = str_replace(" ", "&nbsp;", $content);
			$content = str_replace("\n", "<br>", $content);

			$new_hit = $hit + 1;
			$sql = "update board set hit=$hit where num=$num";
			mysqli_query($con, $sql);
		?>
						<ul id="viewContent">
							<li>
								<span class="col1"><b>제목 :</b><?=$subject?></span>
								<span class="col2"><?=$name?> | <?=$regist_day?></span>
							</li>
							<li>
								<?php 
									if($file_name){
										$real_name = $file_copied;
										$file_path = "../data/".$real_name;
										$file_size = filesize($file_path);

										echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
										<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
									}
								?>
								<?=$content?>
							</li>
						</ul>
						<ul class="buttons">
							<li><button onclick="location.href = 'board_list.php?page=<?=$page?>'">목록</button></li>
							<li><button onclick="location.href = 'board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
							<li><button onclick="location.href = 'board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
							<li><button onclick="location.href = 'board_form.php'">글쓰기</button></li>
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