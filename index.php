<?php

$redis = new Redis();

$redis->connect('127.0.0.1',6379);
echo 'git测试'."<br/>";
echo $redis->get('name');

?>
