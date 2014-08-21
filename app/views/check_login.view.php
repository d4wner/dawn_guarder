<?php

if (empty($_SESSION['name']))
{
echo "Sorry sir,please login first.";
$this->redirect($site_url.'index.php?home.index','马上跳转首页...');
}

?>
