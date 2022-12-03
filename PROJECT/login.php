<?php
     $con = new mysqli('localhost','root','','haritha');
     if(isset($_POST['submit'])){
     $email = $_POST['email'];
     $pass  = $_POST['pass'];
    // if ($email == "Admin@gmail.com"&& $pass == "Admin"){
    //         header('location:dashboard.php');}


     $sql = "select * from `details` where email = '$email' && pass = '$pass'";
     $result = mysqli_query($con,$sql);
     $data = mysqli_fetch_array($result);
     if (mysqli_num_rows($result)>0) {
        header('location:playlist.html');
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <b>Well Done</b> &nbsp;&nbsp;&nbsp;  Login successfuly
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
     } elseif (mysqli_num_rows($result)<=0) {
        echo 'no user found';
        
     }
     else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }   
}
?>