
<!DOCTYPE html>   
<html>
    <head>
      <link rel="stylesheet" href="style_student.css">
      
    </head>
    <body style="font-family: Trebuchet MS;";>
      <hr size="1px" color="black">
    <header style="background-image: linear-gradient(to bottom,#C2B9B0,#A4D275)";>        
        <a style="padding-left: 20px;" href="home.html">HOME</a>

        <nav>
            <ul class="navbar">
                <li><a href="class.html">CLASS</a></li>
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
    
    <div class="welcome" style="background-image: linear-gradient(to bottom,#A4D275,#C2B9B0)";>
        <h1>WELCOME <?php 
        session_start();
        $id = $_SESSION['sid'];
    
        include '_dbconnection.php';
        $sql = "select * from student where sid='$id'";
        $result = mysqli_query($con,$sql);
        $ans =  mysqli_fetch_array($result);
        echo $ans['name'];
        ?></h1>
    </div >
    <hr size="5px" color="black">
    <div class="class" >
    <table border="2" cellspacing="0" style="border-color: black;  ">
      <tr>
        <th colspan="10">TIME TABLE</th>
      </tr>
        <tr>
          <th> days</th>
            <th>
               8:45-9:45 
              </th>
            <th>
              9:45-10:45
            </th>
            <th>
              10:45-11:00   
            </th>
            <th>
              11:00-12:00
            </th>
            <th>
              12:00-1:00
            </th>
            <th>
              1:00-1:45
            </th>
            <th>
                1:45-2:45
            </th>
            <th>
              2:45-3:45
            </th>
            <th>3:45-4:45</th>
        </tr>
        <tr>
          <th>monday</th>
           <td><a href="https://meet.google.com/xnd-tsur-hot"> FAFL </a></td>
            <td><a href="https://meet.google.com/zus-rzwk-itg" > OS </a> </td>
            <td >  </td>
            <td><a href=""> MP </a> </td>
            <td> <a href="https://meet.google.com/wjm-qdec-cgz"> DBMS </a> </td>
            <td>  </td>
            <td> <a href="https://meet.google.com/kjy-tzrn-byn"> OODJ </a> </td>
            <td> <a href="https://meet.google.com/xrp-hndb-fbv"> E1 </a> </td>
            <td> </td>
        </tr>
        <tr>
        <th> tuesday</th>
          <td><a href="https://meet.google.com/wjm-qdec-cgz">DBMS </a> </td>
            <td><a href="https://meet.google.com/xnd-tsur-hot">FAFL(p) </a> </td>
            <td>  </td>
            <td> <a href="https://meet.google.com/kjy-tzrn-byn"> OODJ </a> </td>
            <td><a href="https://meet.google.com/zus-rzwk-itg">OS(T) </a> </td>
            <td>  </td>
            <td><a href="https://meet.google.com/xrp-hndb-fbv">E1 </a> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <th> Wednesday</th>
              <td><a href="https://meet.google.com/xrp-hndb-fbv">E1(P) </a> </td>
                <td><a href="https://meet.google.com/kjy-tzrn-byn">OODJ </a> </td>
                <td>  </td>
                <td> </td>
                <td><a href="https://meet.google.com/xnd-tsur-hot">FAFL </a> </td>
                <td>  </td>
                <td colspan="3">DBMS/OSLAB</td>
                
              </tr>
              <tr>
                <th> Thursday</th>
                  <td><a href="https://meet.google.com/zus-rzwk-itg">OS </a></td>
                    <td><a href="https://meet.google.com/kjy-tzrn-byn">OODJ(p)</a> </td>
                    <td>  </td>
                    <td> <a href="https://meet.google.com/xnd-tsur-hot">FAFL(T)</a></td>
                    <td><a href="">MP</a></td>
                    <td>  </td>
                    <td ></td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr>
                    <th> Friday</th>
                      <td><a href="https://meet.google.com/kjy-tzrn-byn">OODJ</a></td>
                        <td><a href="https://meet.google.com/wjm-qdec-cgz">DBMS</a></td>
                        <td>  </td>
                        <td> </td>
                        <td><a href="https://meet.google.com/xrp-hndb-fbv">E1</a></td>
                        <td>  </td>
                        <td ><a href="https://meet.google.com/zus-rzwk-itg">OS</a></td>
                        <td> <a href="https://meet.google.com/xnd-tsur-hot">FAFL</a></td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th> Saturday</th>
                          <td> </td>
                            <td></td>
                            <td>  </td>
                            <td> </td>
                            <td></td>
                            <td>  </td>
                            <td ></td>
                            <td> </td>
                            <td> </td>
                          </tr>            


    </table>  
    </div>
      
    </body>
</html>