<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="css2.css" text="text/css" rel="stylesheet" />
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
</form>
<header>
  <button class="btn join2"><a href="login.php">회원가입</a></button>
  <button class="btn join" >로그인</button>
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
<form action="login-2.php" method=POST>
<div class="login">
<table>
  <tr>
    <td>이름</td>
    <td><input type=text name=name size=20></td></tr>
  <tr>
    <td>아이디</td>
    <td><input type=text name=id size=20></td></tr>
  <tr>
    <td>비밀번호</td>
    <td><input type=password name=pass size=20></td></tr>
  <tr>
    <td>이메일주소</td>
    <td><input type=text name=email size=20></td></tr>
  <tr>
    <td colspan=2><input class="loginb" type="submit" value="완료">
                  <input class="loginb" type="reset" value="지우기"</td></tr>
</table>
</div>
</form>
<table border=1>
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
