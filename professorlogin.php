

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor_Login</title>
    <link rel="stylesheet" href="mp.css">
</head>
<body class="login"style="background-image: linear-gradient(to left,#2F2FA2,#99738E)">
    
    
    <div class="submit-form" >
        <h1>Professor SignIN </h1>
        <div class="err">
        <?php

if(isset($_POST['login-btn'])){
    include '_dbconnection.php';
    $userid = $_POST["userid"];
    $passwd = $_POST["pass"];

    session_start();
   $_SESSION['id'] = $_POST["userid"];

    $sql = "select * from plogin where pid='$userid' AND password='$passwd' ";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);

    if($num == 1){       
        header("Location: professor.php");
        exit;
    }
    else{
        echo "<h3 style='color:red';>Invalid Credentials!!</h3>";     
        }
}
?>
        </div>        
        <form action="" method="POST">
            <input type="text" class="input-box" name="userid" placeholder="Enter your ID">
            <input type="password" class="input-box" name="pass" placeholder="Enter your Password">
            <button  style="background-color:blue" name="login-btn">submit</button>                                   
        </form>   

    

    
    </div>
</body>
</html>






