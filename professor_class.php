


<!DOCTYPE html>   
<html>
    <head>
      <link rel="stylesheet" href="style_professor.css">
      
    </head>
    <body>
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
        
    <a class="logout" style="font-size: 16px;"  href="professor.php"><button>Profile</button></a>
            
    </header>
    
    <div class="welcome" style="background-image: linear-gradient(to LEFT,#E7717D,#C2CAD0)">
        <h1>WELCOME  <?php 
        session_start();
        $id = $_SESSION['id'];  
        include '_dbconnection.php';
        $result = mysqli_query($con,"select * from professor where pid='$id'");
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