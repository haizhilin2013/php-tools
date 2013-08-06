<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//basename
$path = "/study/file/index.php";
echo basename($path);
echo basename($path, ".php");
//dirname
echo dirname($path);
//chown
var_dump( chown( "index.php", "haizhilin" ) );

?>
