

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
    <link rel="stylesheet" href="style_professor.css">
    
</head>
<body style="background-color: #EEE2DC">
    <hr size="1px" color="black">
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
    
    <div class="welcome" style="background-image: linear-gradient(to RIGHT,#C2CAD0,#E7717D)">
        <h1>WELCOME <?php 
        session_start();
        $userid = $_SESSION['id'];
        include '_dbconnection.php';
        $result = mysqli_query($con,"select * from professor where pid='$userid'");
        $ans =  mysqli_fetch_array($result);
        echo $ans['name'];
        ?></h1>
    </div>
    <hr size="5px" color="black">
    <div class="content" >
        <div class="basic_info" style="height: 400px; width: 500px; border: solid 2px;  border-radius: 10px;background-image: linear-gradient(to bottom,#E3AFBC,#E3E2DF) ">
            
            <h2 style="text-align: center; padding-top: 10px;">    BASIC INFO </h2><br> 
            <hr color="black"> <br>
        <p style="padding-left: 20px; font-size: 20px;">
        ID: <?php echo $ans['pid']; ?><br> <br>

       NAME: <?php echo $ans['name']; ?><br> <br>

       ADDRESS: Bangalore <br> <br>

       Phone NO: <?php echo $ans['phno']; ?> <br> <br>

       Email: <?php echo $ans['email']; ?><br> <br>

       Course Taken: <?php echo $ans['course']; ?><br>
       </p>
        </textarea> 
        </div>
        
        
    </div>
    
</body>
</html>