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
					<h2>쪽지</h2>
					<ul class="cf">
						<li class="first"><a href="../sub03/sub03.php">자유게시판</a></li>
						<li><a href="../sub03/sub03.php">참여</a></li>
						<li class="last"><a href="../sub03/sub03.php">홈</a></li>
					</ul>
				</div><!--  id="contentTit" -->
				<div id="messageBox">
					<h3>
			<?php
			 		if (isset($_GET["page"]))
						$page = $_GET["page"];
					else
						$page = 1;
			 
					$mode = $_GET["mode"];

					if ($mode=="send")
						echo "송신 쪽지함 > 목록보기";
					else
						echo "수신 쪽지함 > 목록보기";
			?>
					</h3>
					<!--  구분선 -->
					<ul id="message">
						<li>
							<span class="col1">번호</span>
							<span class="col2">제목</span>
							<span class="col3">
			<?php						
								if ($mode=="send")
									echo "받은이";
								else
									echo "보낸이";
			?>
							</span>
							<span class="col4">등록일</span>
						</li>
			<?php
				$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);

				if ($mode=="send")
					$sql = "select * from message where send_id='$userid' order by num desc";
				else
					$sql = "select * from message where rv_id='$userid' order by num desc";

				$result = mysqli_query($con, $sql);
				$total_record = mysqli_num_rows($result); // 전체 글 수

				$scale = 10;

				// 전체 페이지 수($total_page) 계산 
				if ($total_record % $scale == 0)     
					$total_page = floor($total_record/$scale);      
				else
					$total_page = floor($total_record/$scale) + 1; 
			 
				// 표시할 페이지($page)에 따라 $start 계산  
				$start = ($page - 1) * $scale;      

				$number = $total_record - $start;

			   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
			   {
			      mysqli_data_seek($result, $i);
			      // 가져올 레코드로 위치(포인터) 이동
			      $row = mysqli_fetch_array($result);
			      // 하나의 레코드 가져오기
			      $num    = $row["num"];
			      $subject     = $row["subject"];
			      $regist_day  = $row["regist_day"];

			      if ($mode=="send")
				  		$msg_id = $row["rv_id"];
			      else
				  		$msg_id = $row["send_id"];
				  
			      $result2 = mysqli_query($con, "select name from members where id='$msg_id'");
			      $record = mysqli_fetch_array($result2);
			      $msg_name     = $record["name"];	  
			?>
						<li>
							<span class="col1"><?=$number?></span>
							<span class="col2"><a href="message_view.php?mode=<?=$mode?>&num=<?=$num?>"><?=$subject?></a></span>
							<span class="col3"><?=$msg_name?>(<?=$msg_id?>)</span>
							<span class="col4"><?=$regist_day?></span>
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
					echo "<li><a href='message_box.php?mode=$mode&page=$new_page'>◀ 이전</a> </li>";
				}		
				else 
					echo "<li>&nbsp;</li>";

			   	// 게시판 목록 하단에 페이지 링크 번호 출력
			   	for ($i=1; $i<=$total_page; $i++)
			   	{
						if ($page == $i)     // 현재 페이지 번호 링크 안함
						{
							echo "<li><b> $i </b></li>";
						}
						else
						{
							echo "<li> <a href='message_box.php?mode=$mode&page=$i'> $i </a> <li>";
						}
			   	}
			   	
			   	if ($total_page>=2 && $page != $total_page)		
			   	{
						$new_page = $page+1;	
						echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> </li>";
					}
					else 
						echo "<li>&nbsp;</li>";
			?>
					</ul> <!-- page -->	    	
					<ul class="buttons cf">
						<li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
						<li><button onclick="location.href='message_box.php?mode=send'">송신 쪽지함</button></li>
						<li><button onclick="location.href='message_form.php'">쪽지 보내기</button></li>
					</ul>
				</div> <!-- message_box -->
			</div> <!-- id="rightContent" -->
		</div><!-- id="content" -->
	</div>	<!-- id="sub2Ct"	  -->
	
</section> 
<footer>
    <?php include "../include/footer.php";?>
</footer>
</body>
</html>