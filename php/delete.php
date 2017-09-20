<?php
include 'student.php';
$obj=new Student();
$result=$obj->delete_student_info_by_id($_GET['student_id']);
$message['message']=$result;
echo json_encode($message);






?>