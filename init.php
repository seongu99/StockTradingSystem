<?php
$db_connect = mysql_connect("127.0.0.1", "root", "pwd") or die (mysql_error());
/* 127.0.0.1은 내 로컬 ip주소 그러니깐 내 컴퓨터나 니컴퓨터 다 각자 컴퓨터에선 저 주소키면 자기 컴퓨터.
아이디 root 비번 pwd으로 접속하는 밑에 stocktradingsystem이름의 디비에 연결하는 거지.
니 컴퓨터에서 제대로 돌아가게 하려면 위에 비번을 바꿔야 함
*/
mysql_select_db("stocktradingsystem");
?>



