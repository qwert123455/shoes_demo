<?php

$arr = array(
    "appId"=>rand(1,999),
    "timestamp"=>time(),
    "nonceStr"=>rand(1,999),
    "signature"=>rand(1,999),
);
echo json_encode($arr);

