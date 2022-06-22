<?php
     include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
          crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="style.css">
     <title>Document</title>

</head>

<body class="bg-light">
     <div class="header">
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <div class="logo">
                         <a class="navbar-brand" href="#">
                              <img src="logo-img.png" alt="" width="70%" class="d-inline-block align-text-top">
                         </a>
                </div>
            </div>
        </nav>

     </div>
     <!-- *************************************** -->

     <div class="container-fluid" align="center">
          <div class="box1">
               <div class="finput" >
				<form method="POST" action="uploadexcel.php" enctype="multipart/form-data">
                         <table>
                              <tr>
                                   <td colspan=2 align="center">
                                        <h1>Upload your Excel Data</h1>
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                       <label>Choose File</label> 
                                   </td>
                                   <td>
                                      <input type="file" name="uploadFile" class="form-control"/>  
                                   </td>
                              </tr>
                              <tr>
                                   <td colspan=2 align="center">
                                        <button type="submit" name="submit" class="btn btn-success">Upload</button>
                                   </td>
                              </tr>
                         </table>
				</form>
            	</div>
          </div>
     </div>


     <!-- ********** -->

     <div class="data">
          <div class="container-fluid">
               <div class="data" align="center">
                    <div class="container-fluid">
                         <div class="row">
                              <div class="col" id="pdata">
                                   <h1>ALL PRIVIOUS DETAILS</h1>
                                   <div class="container car-table">
                                        <div class="row">
                                             <div class="col-12" align="center" id="xdata">
                                                  
                                                  <?php 
                                                       include("db.php");
                                                       $sql = "SELECT * from info";
                                                       $result = $mysqli->query($sql);
                                                       if ($result->num_rows > 0) {?>
                                                    
                                                            <table class="border border-success">
                                                                 
                                                            <tr class="border border-success">
                                                                 <th>id</th>
                                                                 <th>name</th>
                                                                 <th>number</th>
                                                                 <th>email</th>
                                                            </tr>
                                                            <?php while($row = $result->fetch_assoc()) {?>
                                                                 <tr class="border border-success">
                                                                      <td><?php echo $row['id'] ?></td>
                                                                      <td><?php echo $row['name'] ?></td>
                                                                      <td><?php echo $row['number'] ?></td>
                                                                      <td><?php echo $row['email'] ?></td>
                                                                 </tr>
                                                            <?php }?></table>
                                                       <?php 
                                                       }else{
                                                  ?>
                                                  <span class="border border-danger">no data found</span>
                                                  <?php
                                                       }
                                                       ?>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>



     <!-- ********** -->
     <div id="footer" align="center">
          <footer class="footer bg-dark">
               <div class="sologo">
                    <a class="bi bi-facebook" href="#"></a>
                    <a class="bi bi-twitter" href="#"></a>
                    <a class="bi bi-youtube" href="#"></a>
                    <a class="bi bi-instagram" href="#"></a>
               </div>
          </footer>
     </div>
</body>

</html>