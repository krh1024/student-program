
  <style>
    input,td {font-size:9pt; font-family:돋움;}
  </style>

<?php
  //이미 로그인이 된 경우에는 바로 이동시켜준다.
  $login = $_COOKIE[member];
  if(strcmp($login,"yes")==0){
    echo "
      <script>
        location.href = 'login-5.php';
      </script>
    ";
  }
?>
<form action="login-4.php" method=POST>
<table width=500 border=1>
  <tr>
    <td>ID:
    <td><input type=text name=id size=20>
  <tr>
    <td>Password
    <td><input type=password name=pass size=20>
  <tr>
    <td colspan=2><input type=submit value="Login">
</table>
</form>
