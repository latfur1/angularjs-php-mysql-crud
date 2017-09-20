<?php
class Student
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "crud";
    $username = "root";
    $password = "";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    }


    
    public function student_list($page=1,$search_input=''){
       $perpage=10;
       $page=($page-1)*$perpage;
       
       $search='';
       if($search_input!=''){
         $search="WHERE ( student_name LIKE '%$search_input%' OR email_address like '%$search_input%' OR contact like '%$search_input%' OR gender like '$search_input%' OR country like '%$search_input%' )";  
       }
      
     
       $sql = "SELECT * FROM students $search ORDER BY student_id desc LIMIT $page,$perpage";
     
       $query=  $this->conn->query($sql);
       $student=array();
       if ($query->num_rows > 0) {
       while ($row = $query->fetch_assoc()) {
          $student['student_data'][]= $row;
       }
       }
       
       
    $count_sql = "SELECT COUNT(*) FROM students $search";
    $query=  $this->conn->query($count_sql);
    $total = mysqli_fetch_row($query);
    $student['total'][]= $total;
       
       
    return $student;  
    }
    
    public function create_student_info($post_data=array()){
         
    
       $student_name='';
       if(isset($post_data->student_name)){
       $student_name= mysqli_real_escape_string($this->conn,trim($post_data->student_name));
       }
       $email_address='';
       if(isset($post_data->email_address)){
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data->email_address));
       }
       
        $gender='';
       if(isset($post_data->gender)){
       $gender= mysqli_real_escape_string($this->conn,trim($post_data->gender));
       }
       
       
       $contact='';
       if(isset($post_data->contact)){
       $contact= mysqli_real_escape_string($this->conn,trim($post_data->contact));
       }
        $country='';
       if(isset($post_data->country)){
       $country= mysqli_real_escape_string($this->conn,trim($post_data->country));
       }
       
      
     
       $sql="INSERT INTO students (student_name, email_address, contact,country,gender) VALUES ('$student_name', '$email_address', '$contact','$country','$gender')";
        
        $result=  $this->conn->query($sql);
        
        if($result){
          return 'Succefully Created Student Info';     
        }else{
           return 'An error occurred while inserting data';     
        }
          
       
       
       
        
    }
    
    public function view_student_by_student_id($id){
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from students where student_id='$student_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function update_student_info($post_data=array()){
       if( isset($post_data->student_id)){
       $student_id=mysqli_real_escape_string($this->conn,trim($post_data->student_id));
           
       $student_name='';
       if(isset($post_data->student_name)){
       $student_name= mysqli_real_escape_string($this->conn,trim($post_data->student_name));
       }
       $email_address='';
       if(isset($post_data->email_address)){
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data->email_address));
       }
       
        $gender='';
       if(isset($post_data->gender)){
       $gender= mysqli_real_escape_string($this->conn,trim($post_data->gender));
       }
       
       
       $contact='';
       if(isset($post_data->contact)){
       $contact= mysqli_real_escape_string($this->conn,trim($post_data->contact));
       }
        $country='';
       if(isset($post_data->country)){
       $country= mysqli_real_escape_string($this->conn,trim($post_data->country));
       }
       

       $sql="UPDATE students SET student_name='$student_name',email_address='$email_address',contact='$contact',country='$country',gender='$gender' WHERE student_id =$student_id";
     
        $result=  $this->conn->query($sql);
        
         
         unset($post_data->student_id); 
         if($result){
          return 'Succefully Updated Student Info';     
        }else{
         return 'An error occurred while inserting data';     
        }
          
           
           
      
       }   
    }
    
    public function delete_student_info_by_id($id){
        
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  students  WHERE student_id =$student_id";
        $result=  $this->conn->query($sql);
        
         if($result){
          return 'Successfully Deleted Student Info';     
        }else{
         return 'An error occurred while inserting data';     
        }
          
        
           
       }
        
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>