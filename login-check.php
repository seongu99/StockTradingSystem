<?php
require_once("init.php"); //init.php는 db에 연결하는 query임.  require_once(), require(), include() 이 세 종류가 있는데 차이점 알면 좋을듯.
       
$error = ''; //에러 났을 때 담기 위한 변수, php에서는 변수 선언할 때 $로 시작함.
if (isset($_POST['submit'])) { //index.php에서 submit버튼 눌렸을 때 name=submit에 있는 submit이 있는지 여부.
    if (empty($_POST['username']) || empty($_POST['password'])) { //있으면 아디나 비번 입력안하고 submit햇는지 보고
        $error = "Username or Password is invalid"; //둘중 하나라도 입력안했으면 에러 출력.
    } else { //제대로 입력했으면
        $username = $_POST["username"]; //index.php에 아디 비번 가져와서 php변수에 할당
        $password = $_POST["password"];
        $sql_kindofperson = "SELECT type FROM person WHERE ssn='$username' AND pwd='$password'"; //php변수에 들어간 아디 비번으로 DB에 있는 아디 비번하고 matching되는 type 가져오는 쿼리문을 $sql_kindofperson변수에 저장
        $query = mysql_query($sql_kindofperson) or die(mysql_error()); //mysql_query함수로 $sql_kindofperson 저장된 쿼리문을 실행하고 실행 결과를 $query변수에 저장.
        $row = mysql_fetch_array($query); //array형태로 출력한것을 $row에 저장.

        if(mysql_num_rows($query) == 1) { //해당 아디 비번에 해당하는 type이 1개일 때에 한해서만 그 type이 뭔지 보고 해당 type page로 이동함. 1개여야만 정상이기 때문에.
           if ($row[0] == 'manager' ) { //array형태로 1개가 저장되어있기 때문에 0번째. 즉, 첫번째에 들어있는 값을 보고 페이지로 이동.
            header("location: managerMain.php");
          }else if($row[0] == 'employee') {
            header("location: employeeMain.php");
          }else if($row[0] == 'client'){
            header("location: userMain.php");
          } else {
            $error = "unexpected error occured";  
          }

        }else {
          $error = "username or password is invalid";
        }
      }
    }
?>