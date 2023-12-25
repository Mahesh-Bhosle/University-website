

<!DOCTYPE html>
<html>
    <head>
        <title> Assignment</title>
        <link rel="stylesheet" href="style_professor.css">
        <style>
            h1{
                text-align: center;
                font-size: 48px;
                font-family: Arial, Helvetica, sans-serif;
            }
            #QA{
                height: 100px;
                width: 400px;
                text-align: center;
                background-color: beige;
                border-radius:20px;
            }
            #DD{
                height: 60px;
                width: 300px;
                text-align: center;
                background-color: beige;
                border-radius:10px;
            }
            body{
                font-size: 30px;
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
    <a class="logout" style="font-size: 16px;"  href="home.html"><button>Profile</button></a>
            
        
        
    </header>
    <div class="assignment" style="background-image: linear-gradient(to LEFT,#E7717D,#C2CAD0)">
            <a href="PAssignment.php"><b>Create Assignment</b></a> |
            <a href="PSubmission.php"> <b> Submission </b></a>
    </div>
    <body style="background-image: linear-gradient(to left,,#99738E)">
            
        <br>
        <div class="message" >
        <?php 
            session_start();
            $profid = $_SESSION['id'];
        if(isset($_POST['btn'])){
            include '_dbconnection.php';
            $prof_course = mysqli_query($con,"select * from professor where pid = '$profid'");
            $course = mysqli_fetch_array($prof_course);
            $c_id = $course['course_id'];
            $question = $_POST["ques"];
            $due = $_POST["due"];
            $file_name = $_FILES["pdf_file"]["name"];
            $file_tmp = $_FILES["pdf_file"]["tmp_name"];
            $path = 'assignment/';
            move_uploaded_file($file_tmp,$path.'/'.$file_name);

            $sql = "insert into assignment values(' ','$c_id','$question','$due','$file_name')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "<h4 style='color:lightgreen'>successfully Uploaded</h4>";
            }
            else{
                echo "Failed";
            }       
        }   
    ?></div>
        <form action="PAssignment.php" method="POST" enctype="multipart/form-data">
        Assignment <input type="text" placeholder="Please Enter the Question here." id="QA" name="ques" required> <br><br>
                    <input type="file" name="pdf_file"/> <br><br>
        Due Date <input type="text" placeholder="Due Date" id="DD" name="due"> <br> <br>
        <button  style="background-color:aqua" name="btn">Upload</button>
       </form>
    </body>
</html>