<html>
<link rel="stylesheet" href="style_student.css" type="text/css"/>

<header style="background-color: #D1E8E2;">        
        <a style="padding-left: 20px;" href="home.html">HOME</a>

        <nav>
            <ul class="navbar">
                <li><a href="sclass.php">CLASS</a></li>
                <li><a href="smarks.php">MARKS</a></li>
                
                
                <li><a href="assignmenthome.html">ASSIGNMENT</a></li>
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
    
        <div class="assignment" style="background-color: #D1E8E2; padding-left:550px;">
            <a href="Sassignment.php"><b>View Assignment</b></a> |
            <a href="Ssubmit.php"> <b> Submit </b></a>
    </div>
    <body >
        <br><br>
        <?php 
             include '_dbconnection.php';
             $sql_count = mysqli_query($con,"select count(*) as count from assignment");
             $result = mysqli_fetch_array($sql_count);  
             $j = $result['count'];
               
             for($i=1;$i<=$j;$i++){
                $sql = mysqli_query($con,"select * from assignment where id='$i' ");
                $res = mysqli_fetch_array($sql);  
                 echo "<div style='width:500px;border-radius:20px;background-color:lightblue;padding-left:40px;'>"; echo "File Name: "; echo $res['question']; echo "<br>";echo "Assignment ID: "; echo $i; echo "</div>" ;echo "<br>";
             }       
        ?>
        <iframe src="<?php echo 'assignment/'; ?>" width="80%" height="500px" target='_blank'>
        </iframe>
    </body>
</html>