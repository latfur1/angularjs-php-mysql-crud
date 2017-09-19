
<?php
include 'student.php';
$obj=new Student();
$student_data=$obj->view_student_by_student_id($_GET['student_id']);
echo json_encode($student_data);


?>
