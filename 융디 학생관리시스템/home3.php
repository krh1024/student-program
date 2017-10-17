<?php
  $fp = fopen("member.dat","r");
  //구분자를 두어 $data에 값을 저장한다.
  $id = $_POST['id'];
  $password = $_POST['pass'];
  $flag = 1;
  while($data = fgets($fp, 500)){
    $str_ary = explode("*ii*", $data);
    // echo "$str_ary[1] || $id";
		if(strcmp($str_ary[1],$id)==0){
      $flag = 0;
      if(strcmp($str_ary[3],$password)==0){
        //로그인 된 경우
        echo "
        <script>
          window.alert('로그인 되었습니다.');
        </script>
        ";
        ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="css3.css" text="text/css" rel="stylesheet" />
<script src="script/jquery-1.12.3.js" text="text/javascript"></script>
  <title>Document</title>
<style media="screen">
</style>
</head>
<body>
<form action="home3.php" method="POST">
  <div id="modal">
  	<div class="body">
      	<div class="img">
            <table class="table">
              <tr>
              <td>아이디</td><td><input type="text" name="id" size="10" /><br /></td>
              </tr>
              <tr>
              <td>비밀번호</td><td><input type="password" name="pass" size="10" /></td>
              </tr>
              <tr align=center>
              <td colspan=2>
                <button class="btn join2" type="button">닫기</button>
                <input type="submit" value="로그인" class="btn join" />
              </td>
            </table>
          </div>
      </div>
  </div>
<?php  setcookie("member","yes");
}else{
  //패스워드가 다른 경우
  echo "
  <script>
    window.alert('패스워드가 일치하지 않습니다.');
    location.href = 'home.php';
  </script>
  ";
}
break;
}
}
if($flag==1){
//id를 못찾은 경우
echo "
<script>
window.alert('해당 ID가 존재하지 않습니다.');
location.href = 'home.php';
</script>
";
}

?>
</form>
<header>
  <button class="btn join"><a href="home.php">로그아웃</a></button>
  <button class="btn join2"><?php echo "$str_ary[0]님 환영합니다."; ?></button>
<div id="bar">
  <h1>
  JeJu Polytech University
  </h1>
</div>
<form action="home2.php" method="POST">
</hedaer>
  <div class="menubar">
		<ul class="mainmenu">
          <li><a href="#">이름입력</a>
            	<ul class="submenu">
                	<li><a href="#"><input class="text" type="text" name="names" /></a></li>
              </ul>
            </li>
            <li><a href="#">점수입력</a>
            	<ul class="submenu">
                	<li><a href="#"><input class="text" type="text" name="score" /></a></li>
                </ul>
            </li>
            <li><input class="submit" type="submit" value="보내기"></li>
        </ul>
  </div>
</form>
<contents>
<div id="img">
<?php
error_reporting(0);
$name = $_POST["names"];
$score = $_POST["score"];
?>
<table class="php" border=1>
<tr><td>이름</td><td>점수</td></tr>
<tr><td><?php echo $name; ?></td><td><?php echo $score; ?></td></tr>
</table>
</div>
<div id="partner">
</div>
</div>
</contents>
<script src="script/script.js" text="text/javascript"></script>
</body>
</html>
