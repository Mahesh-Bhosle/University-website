<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="style_student.css" type="text/css"/>
    <style>
            h1{
                text-align: center;
                font-size: 48px;
                font-family: Arial, Helvetica, sans-serif;
            }
            #id{
                height: 50px;
                width: 400px;
                text-align: center;
                background-color: beige;
                border-radius:20px;
            }
            
            body{
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                background-color: #C2CAD0;
            }
            .assignment{
                font-size:40px;
            }
            .message{
                height:70px;
            }
        </style>
</head>
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
        <a class="logout" style="font-size: 16px;"  href="student.php"><button>Profile</button></a>
            
        
        
    </header>




    <div class="assignment" style="background-color: #D1E8E2;">
            <a href="Sassignment.php"><b>View Assignment</b></a> |
            <a href="Ssubmit.php"> <b> Submit </b></a>
    </div> <br>
    <body style="background-image: linear-gradient(to left,,#99738E)">
            

        <div class="message" >
        <?php 
            session_start();
            $stud_id = $_SESSION['sid'];
        if(isset($_POST['btn'])){
            include '_dbconnection.php';
            
            $id = $_POST["id"];
            $file_name = $_FILES["pdf_file"]["name"];
            $file_tmp = $_FILES["pdf_file"]["tmp_name"];
            $course_id = $_POST["course_id"]; 
            $path = 'Submission/';
            move_uploaded_file($file_tmp,$path.'/'.$file_name);

            $sql = "insert into submission values('$id','$stud_id','$course_id','$file_name')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "<h4 style='color:lightgreen'>successfully Uploaded</h4>";
            }
            else{
                echo "Failed";
            }       
        }   
    ?></div>
        <form action="" method="POST" enctype="multipart/form-data">
        Assignment ID <input type="text" placeholder="Enter Assignment ID" id="id" name="id" required> <br><br>
            <input type="file" name="pdf_file"/> <br><br>
            Enter CourseID  <input type="text" placeholder="Enter course id" id="id" name="course_id"> <br> <br>
       
        <button  style="background-color:aqua" name="btn">submit</button> <br><br>
       </form>

       <div style="margin:10px; background-color: #f5f5f5;  border-style: solid; width:400px; border-radius:20px;"> 
            <h4 > Note* </h4>
            <h5> Course ID </h5>
            <p>
                FAFL : 151 <br>
                OS : 152 <br>
                OODJ : 153 <br>
                DBMS : 154 <br>
                Cyber Security : 155 <br>
            </p>
       </div>
    </body>
</html>