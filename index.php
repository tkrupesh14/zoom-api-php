<?php
include './zoom_config.php';
include './api.php';

$arr['topic'] = 'Demo Meeting';
$arr['start_date'] = date('2021-12-25 00:03:20');
$arr['duration'] = 30;
$arr['password'] = 'krupesh';
$arr['type'] = '2';
$result = CreateMeeting($arr);
echo "<pre>";
print_r($result);

// if(isset($result->id)){
//     echo "Join Url: <a href = '$result->join_url'>Join Meeting</a><br>";
//     echo "Meeting Password: ". $result->password."<br>";
//     echo "Meeting Password: ". $result->start_time."<br>";
//     echo "Meeting Password: ". $result->duration."<br>";
// }else{
//     echo "<pre>";
//     print_r($result);
// }
?>