<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
set_time_limit(0);
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_start = microtime_float();
$result = '';
$conn = mysql_connect('localhost', 'root', 'root' ) or die ('连接不上数据库');

for($j = 0; $j < 100; $j++){
    mysql_select_db('demo') or die('数据库不存在');
    $query = "select `id`, `name` from `test` limit 0, 1000";
    mysql_query($query);  
    $result = mysql_query($query);

    while ($row = mysql_fetch_assoc($result)) {
        $row['id'] . ': '. $row['name']. '<br />';
    }
}

mysql_free_result($result);
mysql_close($conn);

$time_end = microtime_float();
echo '<br><br>';
$time = $time_end - $time_start;
echo '用时' . $time . '秒';
echo '<br><br>';

?>
