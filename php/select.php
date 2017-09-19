<?php
include 'student.php';



$obj=new Student();
$student_list=$obj->student_list($_GET['page'],$_GET['search_input']);


echo json_encode($student_list);


?>