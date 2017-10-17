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
        echo "$str_ary[0]님 환영합니다.";
        //로그인이 된 경우에는 쿠키를 적용해 줄 수 있다.
        setcookie("member","yes");
      }else{
        //패스워드가 다른 경우
        echo "
        <script>
          window.alert('패스워드가 일치하지 않습니다.');
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
    </script>
    ";
  }

?>
