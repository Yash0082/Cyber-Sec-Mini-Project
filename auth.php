<?php      
    include('connection.php');  
    include('config/constants.php');
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $acc_name = $row['account name'];
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>";  
            $_SESSION['add'] = "Login successful, Welcome $acc_name!";
            header('location:'.SITEURL);
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  