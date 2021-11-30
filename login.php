<?php
include ('database_conn.php');

$msg="";

if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql ="Select * from tableName where username='$username' and password='$password'" ;

    $res=mysqli_query($conn, $sql);
    if(mysqli_num_row($res)>0){

    }else{
        $msg="Please enter valid login details";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       <!-- additional css file -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive-style.css">
    <title>Login</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <form class="newsletter" method="post">
                    <h2>Sign in to Continue</h2>
                    <div class="row">
                        <div class="col-md-8 col-12 mb-3">
                            <input class="form-control" placeholder="Email Address here" name="email"
                                type="email" name="username" required>
                        </div>
                        <div class="col-md-8 col-12 mb-3">
                            <input class="form-control" placeholder="Enter Password" name="password"
                                type="password" name="password" required>
                        </div>
                        <div class="col col-12">
                            <button class="main-btn" type="submit" name="submit">Sign In</button>
                        </div>
                    </div>
                </form>
                <div class="login_msg"><?php echo $msg ?></div>
            </div>
        </div>
    </div>
</body>
</html>