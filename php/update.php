<?php 
include 'student.php';
$obj=new Student();
$data = json_decode(file_get_contents("php://input"));
$result=$obj->update_student_info($data);
$ab['meessage']=$result;
echo json_encode($ab);
?>