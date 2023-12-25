<!DOCTYPE html>
<html>
    <head>
        <title> Assignment</title>
        <link rel="stylesheet" href="style_professor.css">
           <style>
                .assignment{
                    padding-left: 550px;
                    
                }
                div a{
                    font-size: 25px;
                }
           </style>
    </head>


<header style="background-image: linear-gradient(to LEFT,#E7717D,#C2CAD0)">        
        <a style="padding-left: 20px;" href="home.html">HOME</a>

        <nav>
            <ul class="navbar">
                <li><a href="professor_class.php">CLASS</a></li>
                <li><a href="pmarks.php">MARKS</a></li>
                <li><a href="Assignment.php">ASSIGNMENT</a></li>
                <li><a href="https://docs.google.com/spreadsheets/d/18VQcYfJrfVrk5hjPZHuviDQv_6acig2P-3efPQWIkv0/edit#gid=0">ATTENDANCE</a></li>
               
            </ul>
        </nav>
    <a class="logout" style="font-size: 16px;"  href="home.html"><button>Profile</button></a>
</header>
    <div class="assignment" style="background-image: linear-gradient(to LEFT,#E7717D,#C2CAD0);">
        <a href="PAssignment.php"><b>Create Assignment</b></a> |
        <a href="PSubmission.php"> <b> Submission </b></a>
    </div>

<body >
    <br> <br>
    <div style ="margin:10px; width:300px;"> 
        <h5 style="float:left; padding-left:50px"> USN </h5>
        <h5 style="float:right; padding-right:80px"> File Name </h5>

    </div>
    <br>
    <div style="margin:10px; border-style:solid; border-radius:10px; padding:5px; width:500px"> 
               
            <?php 
                session_start();
                $profid = $_SESSION['id'];
                include '_dbconnection.php';
                $sql = mysqli_query($con,"select * from professor where pid='$profid' ");
                $result = mysqli_fetch_array($sql);
                $course_id = $result['course_id'];

                $sql_count = mysqli_query($con,"select sid,assignment_ans from submission where course_id='$course_id' ");
                $display = mysqli_fetch_array($sql_count);
                
                
                while($row = mysqli_fetch_array($sql_count, MYSQLI_NUM))
                {
                    echo ($row[0]);  echo "  ";
                    echo ($row[1]);                  }
            
            ?>

    </div>
        <br><br>
        <iframe src="<?php echo 'Submission/'; ?>" width="80%" height="500px" target='_blank'>
        </iframe>
    </body>
</html>