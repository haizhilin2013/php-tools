<?php

//http://www.sharejs.com/codes/php/
//http://www.php-open.com/
//www.ocshine.net
/**
 * 列出目录
 */
define('STUDYPATH', dirname(__FILE__));

//列出父目录下的所有子目录
function listDir($fDir){
    if( $handle = opendir($fDir) ){
        $output = array();
        
        while(false !== ( $item = readdir( $handle ) ) ){
            if(is_dir($fDir.'/'.$item) and $item != '.' and $item != '..' ){
                $output[] = $item;
            }
        }
        
        closedir($handle);
        return $output;
    }else{
        return false;
    }
}

//读取单个目录下的index.php信息
function readFileInfo($dir, $fileName){
    if( $handle = opendir( $dir ) ){
        $output = array();
        //echo $dir."/".$fileName;
        $str = "";
        
        while ( false !== ( $index = readdir( $handle ) ) ){
            if( is_file( $dir."/".$fileName ) && ( $index == $fileName ) ){
                $str = file_get_contents($dir."/".$fileName);
                echo $str;
            }
        }
    }
}

readFileInfo('./ajax', 'index.php');

$dirs = listDir(STUDYPATH);
//var_dump($dirs);



?>

<html>
    <head>
        <title>目录列表</title>
    </head>
    <body>
        <style>
            .top{border-bottom: 1px solid blue;height:50px;line-height: 50px;text-align: center;font-weight:bold;font-size: 30px;}
            ul li{float:left;width:140px;height:30px;line-height: 30px;}
            ul li a{font-size: 20px;}
        </style>
        <div class="top">目录列表</div>
        <ul>
            <?php
            foreach ($dirs as $dir){                
            ?>
            <li><a href="./<?=$dir ?>"><?=$dir ?></a></li>
            <?php
            }
            ?>
        </ul>
    </body>
</html>