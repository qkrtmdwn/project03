<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php 
  include "../include/define.php";
    
  $id   = $_POST["id"]; 
  $pass = $_POST["pass"]; 
  $name = $_POST["name"]; 
  $email1  = $_POST["email1"]; 
  $email2  = $_POST["email2"];
  
  $email = $email1."@".$email2; 
  $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
  
  
  $con = mysqli_connect(DBhost, DBuser, DBpass, DBname); // 02/21개 수정
  
  $sql = "insert into members(id, pass, name, email, regist_day, level, point) "; 
  $checkid = "select * from members where id='$id'";
  $result =  mysqli_query($con, $checkid);
  $num_record = mysqli_num_rows($result);
  $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";
  
  if($num_record)
       {
         echo("
                 <script>
                   window.alert('아이디가 중복되었습니다! 다른 아이디를 사용해주세요.')
                   history.go(-1)
                 </script>
              ");
       }
       else
       {
             mysqli_query($con, $sql);
       } 
       mysqli_close($con);  
  
  echo " 
      <script>   
          location.href = '../main/index.php';
          //location.href = '../index2.php';
          //아직 코딩되지 않은 부분이라서 나중에 수정
          //location.href = 'login_form.php'; 
      </script> 
  "; 
?>      