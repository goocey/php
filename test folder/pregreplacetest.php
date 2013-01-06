<?php
$sql = <<< SQL_END
SELECT m.id `会員ID`, IF(m.optin_flg = 1, 'ON', 'OFF') `オプトイン状況`, DATE_FORMAT(m.date_created, '%Y') `登録日Y`, DATE_FORMAT(m.date_created, '%m') `登録日M`, DATE_FORMAT(m.date_created, '%d') `登録日D`, DATE_FORMAT(qm.quit_date, '%Y') `退会日Y`, DATE_FORMAT(qm.quit_date, '%m') `退会日M`, DATE_FORMAT(qm.quit_date, '%d') `退会日D`, (SELECT COUNT(*) FROM member_informations tmp WHERE tmp.ip_address = mi.ip_address) `同一IPからの登録数` ,m.* FROM members m INNER JOIN member_informations mi ON m.id = mi.member_id LEFT JOIN quitted_members qm ON m.id = qm.member_id WHERE m.date_created >= '<#date_created_start>' AND m.date_created <= '<#date_created_end>'
SQL_END;

$date_created_start = '9292';
$date_created_end = '0012';

preg_match_all("/\<\#.*\>/",$sql,$array);

$pattern='/\<\#(.*)\>/';
$repacement='$1';

var_dump($array);
foreach($array as $column){
  $replaced[] = preg_replace($pattern,$repacement,$column);
}
var_dump($replaced);
?>
