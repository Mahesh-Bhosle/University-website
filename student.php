

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="style_student.css" type="text/css"/>
    
</head>
<style>
    .dropdown-submenu {
      position: relative;
    }
    
    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
    }
    </style>
<body style="font-family: Trebuchet MS;";>
    <hr size="1px" color="slate">
    <header style="background-color: #D1E8E2;">        
        <a style="padding-left: 20px;" href="home.html">HOME</a>

        <nav>
            <ul class="navbar">
                <li><a href="sclass.php">CLASS</a></li>
                <li><a href="smarks.php">MARKS</a></li>
                
                
                <li><a href="Sassignment.php">ASSIGNMENT</a></li>
                <li><a href="#">RESOURSE </a>  
                    <div class="submenu">
                        <ul>
                            <li class="menu2"><a href="https://drive.google.com/drive/folders/1u5ZgYfPtbRc8FJqvcp_EXCRHwgb6RG9_?usp=sharing" target="_blank" rel="noopener noreferrer">FAFL </a> </li>
                            

                            <li class="sub"><a href="https://drive.google.com/drive/folders/1-VGnTtcCNgQKbSrxoisxGvtsZaYS_TPf?usp=sharing" target="_blank" rel="noopener noreferrer">OS</a> </li>
                            <li class="sub"><a href="https://drive.google.com/drive/folders/1KaLGWviEzyqEiV-_fnef4OV4S9B550ZA?usp=sharing" target="_blank" rel="noopener noreferrer">DBMS</a> </li>
                            <li class="sub"><a href="https://drive.google.com/drive/folders/1V6LOgR84RLVrPeGwaqikNwWobQUB1AJ_?usp=sharing" target="_blank" rel="noopener noreferrer">OODJ</a> </li>
                            <li class="sub"><a href="https://drive.google.com/drive/folders/1AGtBNS0lNbWw6GVpo2FaUEe4ENXNvhA2?usp=sharing" target="_blank" rel="noopener noreferrer">E-1</a> </li>

                        </ul>
                    </div>
                
                </li>
                <li><a href="placement.html">PLACEMENT GUIDE</a></li>
                
                
            </ul>
        </nav>
        <a class="logout" style="font-size: 16px;"  href="home.html"><button>Logout</button></a>
            
        
        
    </header>
    <div class="welcome" style="background-image: linear-gradient(to bottom,#D1E8E2,#116466);">
    <h1>WELCOME <?php 
        session_start();
        $userid = $_SESSION['sid'];
        include '_dbconnection.php';
        $result = mysqli_query($con,"select * from student where sid='$userid'");
        $ans =  mysqli_fetch_array($result);
        echo $ans['name'];
        ?> </h1>
        
    </div>
    <hr size="5px" color="black">
    <div class="content">
        <div class="basic_info" style="height: 400px; width: 500px; border: solid 2px; border-color: beige; border-radius: 10px; background-image: linear-gradient(to bottom,#66FCF1,#1F2833);">
            
            <h2 style="text-align: center; padding-top: 10px;">    BASIC INFO </h2><br> 
            <hr color="black"> <br>
        <p style="padding-left: 20px; font-size: 20px;">
        USN: <?php echo $ans['sid']; ?> <br> <br>

       NAME: <?php echo $ans['name']; ?><br> <br>

       ADDRESS: <?php echo $ans['address']; ?><br> <br>

       Phone NO: <?php echo $ans['phno']; ?> <br> <br>

       Email: <?php echo $ans['email']; ?><br>
       </p>
        
        </div>
        <div class="basic_info" style="height: 450px; width: 500px; border: solid 2px; border-color: beige; border-radius: 10px; background-image: linear-gradient(to bottom,#66FCF1,#1F2833);">
            
            <h2 style="text-align: center; padding-top: 10px;">    ACADEMIC INFO </h2><br> 
            <hr color="black"> <br>
        <p style="padding-left: 20px; font-size: 20px;">

        BRANCH: <?php echo $ans['branch']; ?><br> <br>

        CURRENT SEM: <?php echo $ans['sem']; ?> <br> <br>  
        
        <h3 style="text-align: left;padding-left:20px;">Courses</h3><br>
        
            <p style="text-align: left;padding-left: 20px;"><?php echo $ans['course1']; ?></p><br>
            <p style="text-align: left;padding-left: 20px;"><?php echo $ans['course2']; ?></p><br>
            <p style="text-align: left;padding-left: 20px;"><?php echo $ans['course3']; ?></p><br>
            <p style="text-align: left;padding-left: 20px;"><?php echo $ans['course4']; ?></p><br>
            <p style="text-align: left;padding-left: 20px;"><?php echo $ans['course5']; ?></p><br>      

            <p style="padding-left: 20px; font-size: 20px;"> FEES STATUS: <?php echo $ans['fees']; ?><br> <br> </p>

      
       </p>
       
        </div>
        
    </div>
    
</body>
</html>