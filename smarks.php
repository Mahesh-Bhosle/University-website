<?php 
    include '_dbconnection.php';
    session_start();
    $sid = $_SESSION['sid'];
   $sql11 = "select * from cbt where sid='$sid' and course_id='151'";
   $result11 = mysqli_query($con,$sql11);
   $num11 = mysqli_num_rows($result11);   

   $sql21 = "select * from cbt where sid='$sid' and course_id='152'";
   $result21 = mysqli_query($con,$sql21);
   $num21 = mysqli_num_rows($result21);

   $sql31 = "select * from cbt where sid='$sid' and course_id='153'";
   $result31 = mysqli_query($con,$sql31);
   $num31 = mysqli_num_rows($result31);

   $sql41 = "select * from cbt where sid='$sid' and course_id='154'";
   $result41 = mysqli_query($con,$sql41);
   $num41 = mysqli_num_rows($result41);

   $sql51 = "select * from cbt where sid='$sid' and course_id='155'";
   $result51 = mysqli_query($con,$sql51);
   $num51 = mysqli_num_rows($result51);

   $sql12 = "select * from midterm where sid='$sid' and course_id='151'";
   $result12 = mysqli_query($con,$sql12);
   $num12 = mysqli_num_rows($result12);

   $sql22 = "select * from midterm where sid='$sid' and course_id='152'";
   $result22 = mysqli_query($con,$sql22);
   $num22 = mysqli_num_rows($result22);

   $sql32 = "select * from midterm where sid='$sid' and course_id='153'";
   $result32 = mysqli_query($con,$sql32);
   $num32 = mysqli_num_rows($result32);
//    $mark3 = mysqli_fetch_array($result3);

   $sql42 = "select * from midterm where sid='$sid' and course_id='154'";
   $result42 = mysqli_query($con,$sql42);
   $num42 = mysqli_num_rows($result42);
//    $mark4 = mysqli_fetch_array($result4);

   $sql52 = "select * from midterm where sid='$sid' and course_id='155'";
   $result52 = mysqli_query($con,$sql52);
   $num52 = mysqli_num_rows($result52);
//    $mark5 = mysqli_fetch_array($result5);

   $sql13 = "select * from cia where sid='$sid' and course_id='151'";
   $result13 = mysqli_query($con,$sql13);
   $num13 = mysqli_num_rows($result13);

//    $mark1 = mysqli_fetch_array($result1);

   $sql23 = "select * from cia where sid='$sid' and course_id='152'";
   $result23 = mysqli_query($con,$sql23);
   $num23 = mysqli_num_rows($result23);
//    $mark2 = mysqli_fetch_array($result2);

   $sql33 = "select * from cia where sid='$sid' and course_id='153'";
   $result33 = mysqli_query($con,$sql33);
   $num33 = mysqli_num_rows($result33);
//    $mark3 = mysqli_fetch_array($result3);

   $sql43 = "select * from cia where sid='$sid' and course_id='154'";
   $result43 = mysqli_query($con,$sql43);
   $num43 = mysqli_num_rows($result43);
//    $mark4 = mysqli_fetch_array($result4);

   $sql53 = "select * from cia where sid='$sid' and course_id='155'";
   $result53 = mysqli_query($con,$sql53);
   $num53 = mysqli_num_rows($result53);
//    $mark5 = mysqli_fetch_array($result5);

   
   
    
    
    ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Marks</title>
        <style>
            body{
                background-color: smokewhite;
            }
            div{
                width: max-content;
                text-align: center;
                margin: 90px;
                font-family: sans-serifs;
                border-style: groove;
                width: 300px;
                height: max-content;
            }
            
            #FAFL{
                float: left;
                background-color: lightgreen;
               border-radius: 10px;
            }
            #OS{
                float: left;
                background-color: skyblue;
                border-radius: 10px;
            }
            #OODJ{
                float: left;
                background-color: seagreen;
                border-radius: 10px;
            }
            #DBMS{
                float: left;
                background-color: sienna;
                border-radius: 10px;
            }
            #CS{
                float: left;
                background-color: slateblue;
                border-radius: 10px;
            }
            /* h1{
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                font-size: 48px;
            } */
        </style>
        <link rel="stylesheet" href="style_student.css" type="text/css"/>
    
    </head>
    <body>
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
       
        <div id="FAFL">
            <h2>FAFL</h2>
            CBT:  <br><?php if($num11 == 1){
        
        $mark11 = mysqli_fetch_array($result11);
        echo $mark11['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?><br>
            MidTerm:   <br> <?php if($num12 == 1){
        
        $mark12 = mysqli_fetch_array($result12);
        echo $mark12['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?>
                
            <br> 
            CIA:   <br>  <?php if($num13 == 1){
        
        $mark13 = mysqli_fetch_array($result13);
        echo $mark13['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?><br> 
            SEE:    <br>
        </div>
        <div id="OS">
        <h2>Operating Systems</h2>
            CBT:  <br><?php if($num21 == 1){
        
        $mark21 = mysqli_fetch_array($result21);
        echo $mark21['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?><br>
            MidTerm:    <br>   <?php if($num22 == 1){
        
        $mark22 = mysqli_fetch_array($result22);
        echo $mark22['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?><br>    
            CIA:     <br>  <?php if($num23 == 1){
        
        $mark23 = mysqli_fetch_array($result23);
        echo $mark23['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?><br>
            SEE:    <br>
        </div>
        <div id="OODJ">
        <h2>OODJ</h2>
            CBT:  <br> <?php if($num31 == 1){
        
        $mark31 = mysqli_fetch_array($result31);
        echo $mark31['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?> <br>
            MidTerm:    <br> <?php if($num32 == 1){
        
        $mark32 = mysqli_fetch_array($result32);
        echo $mark32['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?> <br>
            CIA:   <br>  <?php if($num32 == 1){
        
        $mark32 = mysqli_fetch_array($result32);
        echo $mark32['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?>    <br>    
            SEE: <br>
        </div>
        <div id="DBMS">
        <h2>DBMS</h2>
            CBT:  <br> <?php if($num41 == 1){
        
        $mark41 = mysqli_fetch_array($result41);
        echo $mark41['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?> <br>
            MidTerm:   <br> <?php if($num42 == 1){
        
        $mark42 = mysqli_fetch_array($result42);
        echo $mark42['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?>  <br>
            CIA:   <br>  <?php if($num43 == 1){
        
        $mark43 = mysqli_fetch_array($result43);
        echo $mark43['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?>  <br>
            SEE:  <br>
        </div>
        <div id="CS">
        <h2>Cyber Security</h2>
            CBT:  <br> <?php if($num51 == 1){
        
        $mark51 = mysqli_fetch_array($result51);
        echo $mark51['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?> <br>
            MidTerm:    <br> <?php if($num52 == 1){
        
        $mark52 = mysqli_fetch_array($result52);
        echo $mark52['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?>  <br>
            CIA:    <br>  <?php if($num53 == 1){
        
        $mark53 = mysqli_fetch_array($result53);
        echo $mark53['marks'];
    }
    else{       

        echo "<h3 style='color:red';>Not Updated</h3>";
        
        
    }?>   <br>
            SEE: <br>
        </div>
    </body>
</html>