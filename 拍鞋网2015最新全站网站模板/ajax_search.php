<?php
$arr = array
(
    "top" => array
        (
            'title' => "休闲运动鞋中性匡威",
            'mainstyle' => array
                (
                    '1' => "运动鞋"
                )

        ),

    "suggester" => array
        (
            '0' => "休闲运动鞋中性converse",
            '1' => "休闲运动鞋匡威运动鞋",
            '2' => "休闲运动鞋converse运动鞋",
            '3' => "休闲运动鞋匡威中性",
        )

);
echo json_encode($arr);

