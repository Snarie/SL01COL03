<?php
date_default_timezone_set("Europe/Amsterdam");

$teammembers = ["1" => "arie",
    "2" => "polina",
    "3" => "stephan"
];

$details = [
    1 => [1 => "pv"],
    2 => [1 => "sl01"],
    3 => [2 => "sl01"],
    4 => [3 => "fd"],
    5 => [3 => "sl01"]
];

//foreach($teammembers as $member => $modules) {
//    echo "<div>
//            <h3>
//                <a href='views/details.view.php'>$member</a>
//            </h3>
//            <p>";
//    foreach($modules as $module) {
//        echo $module . "<br>";
//    }
//    echo "</p></div>";
//
//}

foreach ($details as $detail => $modules) {
    if($detail == 1) {
        foreach ($modules as $module) {
            echo $module . "<br>";
        }
    }
}