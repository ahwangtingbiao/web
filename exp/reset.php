<?php
include('inc/function.php');
include('config.php');

deldir($updir);//删除表情主图目录
deldir($updir_pre);//删除聊天面板图目录

createDir($updir);//创建表情目录
createDir($updir_pre);//创建聊天面板图目录

echo '<script>window.close();</script>'
?>
