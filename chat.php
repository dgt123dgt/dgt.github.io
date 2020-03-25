<?php

sleep(1);

$messageList =array(
    '滚',
    '闭嘴',
    '没空',
    '再见',
    '不想理你'
);

//array_rand 返回的是一个随机的下标
$randomKey = array_rand($messageList,1);

//使用 随机下标 返回 随机的值
echo $messageList[$randomKey];

?>
