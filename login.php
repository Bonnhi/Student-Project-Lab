<?php include('./connection.php')
?>
<?php

    $data = stripslashes(file_get_contents("php://input"));
    $mydata = json_decode($data,true);
   
    $user_id=$mydata['user_id'];
   
    $user_password=$mydata['user_password'];
    if(!empty($user_id)&&!empty($user_password)){
        $sql = "select teacher_id, teacher_pass from teacherRegistration where teacher_id='$user_id' and teacher_pass='$user_password'";
        $sql1 = "select student_id, student_pass from studentRegistration where student_id='$user_id' and student_pass='$user_password'";

        $r = mysqli_query($conn, $sql);
        $r1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($r) > 0) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['teacher_login_status'] = "logged in";
            // header('Location:./admin/home.php');
            echo 1;
        } else if (mysqli_num_rows($r1) > 0) {

            $_SESSION['user_id'] = $user_id;
            $_SESSION['student_login_status'] = "logged in";
            echo 2;
            // header("Location:./student.php");
        } else {
            echo "Incorrect id or password";
        }

      
    }
    else {
        echo "All fields are required";
    }

?>