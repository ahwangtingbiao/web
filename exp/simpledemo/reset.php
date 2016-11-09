<?php
include('inc/function.php');

$updir = 'up/';//定义表情上传目录

deldir($updir);//删除表情目录

createDir($updir);//创建表情目录

echo '<script>
window.close();
	</script>'
?>
