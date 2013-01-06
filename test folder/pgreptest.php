<?php
$sql = <<< SQL_END
SELECT
	m.id `会員ID`,
	IF(m.optin_flg = 1, 'ON', 'OFF') `オプトイン状況`,
	DATE_FORMAT(m.date_created, '%Y') `登録日Y`,
	DATE_FORMAT(m.date_created, '%m') `登録日M`,
	DATE_FORMAT(m.date_created, '%d') `登録日D`,
	DATE_FORMAT(qm.quit_date, '%Y') `退会日Y`,
	DATE_FORMAT(qm.quit_date, '%m') `退会日M`,
	DATE_FORMAT(qm.quit_date, '%d') `退会日D`,
	(SELECT COUNT(*) FROM member_informations tmp WHERE tmp.ip_address = mi.ip_address) `同一IPからの登録数`
,m.*
FROM
	members m
	INNER JOIN member_informations mi ON m.id = mi.member_id
	LEFT JOIN quitted_members qm ON m.id = qm.member_id
WHERE
	m.date_created >= '2010-10-01 00:00:00' AND
	m.date_created <= '2010-10-31 23:59:59'
SQL_END;

preg_match("/where.*/is",$sql,$array); 
var_dump($array);
?>
