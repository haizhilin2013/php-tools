<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
* @filename baseTags.php
* @touch date Tue 21 Apr 2009 11:49:12 AM CST
* @package phpDocumentor demo
* @author Laruence
* @license http://www.zend.com/license/3_0.txt   PHP License 3.0
* @version 1.0.0
* @copyright (c) 2009, Laruence
*/
 
/**
* this function is a demo to illustrate how phpdocument tags work
* <code>
* $bool = element(true, "laruence");
* </code>
* @deprecated
* @param bool $bool  a flag to decide whether the string should be output
* @param string|int  $string  sometimes it's a string, sometimes it's a int
* @return bool
*/
function element($bool, $string){
if ($bool){
die("flag off");
}
echo "I love $string";
return true;
}
?>
