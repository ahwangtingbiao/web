<?php
 
 //创建文件夹
 function createDir($aimUrl) {
        $aimUrl = str_replace('', '/', $aimUrl);
        $aimDir = '';
        $arr = explode('/', $aimUrl);
        $result = true;
        foreach ($arr as $str) {
            $aimDir .= $str . '/';
            if (!file_exists($aimDir)) {
                $result = mkdir($aimDir);
            }
        }
        return $result;
    }
	
 // 删除文件夹 
function deldir($dir) {
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
  closedir($dh);
  //删除当前文件夹：
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}


/*删除指定目录下的文件，不删除目录文件夹*/
function delFile($dirName){
    if(file_exists($dirName) && $handle=opendir($dirName)){
        while(false!==($item = readdir($handle))){
            if($item!= "." && $item != ".."){
                if(file_exists($dirName.'/'.$item) && is_dir($dirName.'/'.$item)){
                    delFile($dirName.'/'.$item);
                }else{
                    if(unlink($dirName.'/'.$item)){
                        return true;
                    }
                }
            }
        }
        closedir( $handle);
    }
}

//文件复制
function recurse_copy($src,$des) {
    $dir = opendir($src);
    @mkdir($des);
    while(false !== ( $file = readdir($dir)) ) {
             if (( $file != '.' ) && ( $file != '..' )) {
                    if ( is_dir($src . '/' . $file) ) {
                            recurse_copy($src . '/' . $file,$des . '/' . $file);
                    }  else  {
                            copy($src . '/' . $file,$des . '/' . $file);
                    }
            }
      }
    
     closedir($dir);
   }
   

?>
