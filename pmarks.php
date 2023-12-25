<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <style> 
        .cont{
            width: 600px;
            height: 300px;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
        border-radius: 20px;
        background: rgb(224, 208, 208);
        padding: 20px;
        margin: 8% auto 0;
        text-align: center;
        }
        .input-box{
        border-radius: 20px;
        padding: 10px;
        margin: 10px 0;
        width: 50%;
        border: 1px solid rgb(250, 250, 250);
        outline: none;
        }
    .submit{
        color: rgb(253, 242, 242);
    width: 20%;
    padding: 10px;
    border-radius: 20px;
    font-size: 15px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    background-color: blue;
    }        


    </style>
    <link rel="stylesheet" href="style_professor.css">
</head>
<body>
    <header style="background-image: linear-gradient(to LEFT,#E7717D,#C2CAD0)">        
        <a style="padding-left: 20px;" href="home.html">HOME</a>

        <nav>
            <ul class="navbar">
                <li><a href="professor_class.php">CLASS</a></li>
                <li><a href="pmarks.php">MARKS</a></li>
                <li><a href="PAssignment.php">ASSIGNMENT</a></li>
                <li><a href="https://docs.google.com/spreadsheets/d/18VQcYfJrfVrk5hjPZHuviDQv_6acig2P-3efPQWIkv0/edit#gid=0">ATTENDANCE</a></li>
               
            </ul>
        </nav>
    <a class="logout" style="font-size: 16px;"  href="home.html"><button>LOGOUT</button></a>
            
        
        
    </header>
    <div class="cont" style="background-image: linear-gradient(to LEFT,#6f66e4,#a7bfd1)">
        <h1 style="color: rgb(1, 12, 10);">Update Marks Here</h1><br>
        <div class="message">
        <?php
    include '_dbconnection.php';
    session_start();
    $pid = $_SESSION['id'];
    $courseid = mysqli_query($con,"select * from professor where pid='$pid'");
    $ans =  mysqli_fetch_array($courseid);
    $c_id = $ans['course_id'];    
    if(isset($_POST['submit'])){           
        $stid = $_POST['stid'];        
        $marks = $_POST['mark'];
        $sql = "insert into cbt values('$stid','$c_id','$marks')";
        $result = mysqli_query($con,$sql);
        
        if($result){
            echo "<h3 style='color:green;'>Successfully updated</h3>";
        }
        else{
            echo "<h3 style='color:red;'>Failed! Try again</h3>";
        }        
    }
?> 
        </div>
        <form action="" method="POST">
            USN: <input type="text" class="input-box" name="stid" placeholder="Enter Student ID"><br>
            Marks: <input type="text" class="input-box" name="mark" placeholder="Enter marks">        <br><br>               
            <button name="submit" class="submit">Submit</button>                                 
        </form>
    </div>   
</body>
</html>