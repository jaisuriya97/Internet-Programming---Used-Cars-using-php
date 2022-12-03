<?php
    $con = new mysqli('localhost','root','','haritha');
        if(isset($_POST['submit'])){
        $name = $_POST['user'];
        $email = $_POST['mail'];
        $pass  = $_POST['pass'];
        $cpass = $_POST['cpass'];

            $sql = "INSERT INTO `details`(nam,email,pass) VALUES ('$name', '$email','$pass')";
            if ($con->query($sql) === TRUE) {
                header('location:playlist.html');
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <b>Well Done</b> &nbsp;&nbsp;&nbsp;  signup successfuly
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }   
    }
?>