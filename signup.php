<?php 
  include("connection.php");
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "select * from signup where username ='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from signup where email ='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);


    if($count_user ==0 & $count_email ==0){

        if($password==$cpassword){
           $hash = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO signup(username, email, password) VALUES('$username', '$email', '$hash')";
           $result= mysqli_query($conn, $sql);
           if ($result){
            header("Location: welcome.php");
           }
        }else {
            echo '<script>
            window.location.href="index.php";
            alert("Password not the smae");
            </script>';
        }

    }
    else {
        if($count_user>0) {
            echo '<script>
            window.location.href="index.php";
            alert("Username already exist");
            </script>';
        }
        if ($count_email > 0){
            echo '<script>
            window.location.href="index.php";
            alert("Email already exist");
            </script>';
        }
    }

  }

?>