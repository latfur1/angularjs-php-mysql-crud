<?php 

include 'student.php';
$obj=new Student();
$data = json_decode(file_get_contents("php://input"));
$result=$obj->create_student_info($data);
$message['message']=$result;
echo json_encode($message);



?>