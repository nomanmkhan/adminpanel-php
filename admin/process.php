<?php require_once 'dbconfig.php' ?>
<?php 

// LOGIN
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    


    $result = $mysqli->query("select * from users where username=$username && password=$password");
    // echo count($result);
    // die;
    if(count($result)==1){
        session_start();
        $_SESSION['username']=$username;
        header('location: index.php');
    }else{
        header('location: login.php');
    }
}


?>