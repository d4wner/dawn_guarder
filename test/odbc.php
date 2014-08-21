<?php
#$dbh = new PDO('odbc:Driver={SQL Server};Server=SPIDER-9A058FD8\SQLEXPRESS;Database=dawn_guard_log;','','');
#$dbh=odbc_connect('Driver={SQL Server};Server=SPIDER-9A058FD8\SQLEXPRESS;Database=dawn_guard_log;','','');
#$con = mssql_connect('192.168.77.131,1433', '', '') or die("连接不上数据库"); 
#$dbh = mssql_connect('192.168.77.131\SQLEXPRESS','', '');
$dbh2 = mssql_connect('192.168.77.131','sa', 'hacker123456!@#');
#var_dump( $dbh );
#var_dump( $con );
$rs=mssql_query('SELECT Name FROM Master..SysDatabases ORDER BY Name',$dbh2);
echo mssql_num_rows($rs);
var_dump( $dbh2 );
?>
