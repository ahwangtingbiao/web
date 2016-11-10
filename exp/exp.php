<?php
//密码校验开始
if($_POST['password']!=='admin')
{	echo '<script>alert("对不起，您输入的密码不正确！");
	window.history.go(-1);
	</script>';
 die();
}
//密码校验结束

include('inc/function.php');//引入函数


//数据处理开始

include('config.php');//获取配置文件

createDir($qqdir);//创建目录
createDir($qqdir_land);//创建目录
createDir($qqres);//创建目录
createDir($wxdir);//创建目录
createDir($wxdir_land);//创建目录
write_ini_file($qq_expression, $qqdir.'expression.ini', true);
write_ini_file($qq_expression_land, $qqdir_land.'expression.ini', true);
write_ini_file($wx_expression, $wxdir.'expression.ini', true);
write_ini_file($wx_expression_land, $wxdir_land.'expression.ini', true);
write_ini_file($info,$expdir.'/info.ini', true);
recurse_copy($updir,$qqres);
recurse_copy($updir_pre,$expdir);

$exportPath = $rootdir;//设置需要打包的目录
$filename =$rootdir.".exp";//设置压缩包的文件名

include('pack.php');//开始打包并下载

unlink($filename);//删除文件
delDir($rootdir);//删除目录

//数据处理结束

	

?>
