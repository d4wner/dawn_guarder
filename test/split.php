<?php

$search_value="192.168.227.4";

list($search_type,$search_ip) = split(':',$search_value);
		if (search_type==''||search_ip=='')
		{
			echo '搜索参数格式错误！';
			exit(0);
		
		}

echo $search_type.'==';
echo $search_ip;


?>
