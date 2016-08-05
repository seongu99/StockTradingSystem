<?php
require_once("init.php");

?>

<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8;">
    <title>Stock Trading System</title>
    
  </head>
  <body>
    <div id=login-page>
       <div id=login-box>
         <div id=login-title>LOGIN</div>
           <form action="login-check.php" method="post"><!--form태그안의 것을 post방식으로 login-check.php로 보낸다는 의미. action이 일어나는 시점은 submit이 눌려 졌을 때-->
              <div input id=login-id ><input name="username"placeholder="ID" type ="text"></div><!--name의 내용을 추후에 씀-->
              <div id=login-pw ><input name="password" placeholder="Password" type = "password"></div><!--name의 내용을 추후에 씀, 비밀번호 같은 경우엔 type을 password로하면 입력시 ****같이 입력한 것이 안보이게 나타남.-->
              <div id=login-button><button type="submit" name="submit">Go</button></div>
            </form>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/stocktrading.js"></script>
  </body>
</html>
