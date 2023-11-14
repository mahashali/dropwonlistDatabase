<?php include('conn.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="container mt-4 bg-light p-3">
  <div class="row">
    <div class="col-md-3">
      <form action="index.php" method="POST">
      <select class="form-select" name="standars">
      <option value="">Standers</option>
      <?php
          $query1 ="SELECT * FROM standars";
          $result1=mysqli_query($conn,$query1);
          while($rows1 = mysqli_fetch_array($result1)) { 
            $standardID = $rows1['id'];
            $rowsData1 = $rows1['standerName'];
            ?>
            <option value="<?php echo $standardID;?>"><?php echo $rowsData1;?></option>
            
          <?php
          }
          ?>
    </select>
    </div>
    <!-- <div class="col-md-3">
      <select class="form-select" name="courses">
        <option value="">Courses</option> -->
      
        <!--   // $query2 ="SELECT * FROM  courses";
          // $result2=mysqli_query($conn,$query2);
          // while($rows2 = mysqli_fetch_array($result2)) { 
          //   $courseID = $rows2['id'];
          //   $rowsData2 = $rows2['courseName'];
          //   ?> -->
           <!--  <option value="< ?php echo $courseID;?>">< ?php echo $rowsData2;?></option> -->
            
         
   <!--      </select>
    </div> -->
    <div class="col-md-3">
    <button class="btn btn-info text-white" type="submit" name="btn"><i class="bi bi-search"></i><i>saerch</i></button>
    
  </div>
  <div class="col-md-12 mt-4">
  
      
      <?php
      if (isset($_POST['btn'])) {
       
      $standerName = $_POST['standars'];
      // $courseName = $_POST['courses'];
      $query3 ="SELECT students.Fname, students.Lname,students.gender FROM students
      WHERE students.standarID = '$standerName'";
      ?>
      <table class="table table-bordered">
      <tr>
        <th>Stander</th>
         <th>Stander</th>
        <th>Gender</th>
      </tr>
      <?php
          $result3=mysqli_query($conn,$query3);
          while($rows3 = mysqli_fetch_array($result3)) { 
            // $DataID = $rows3['id'];
            $studentName = $rows3['Fname'];
            $lastName = $rows3['Lname'];
            $gender = $rows3['gender'];
            ?>
            <tr>
            <td><?php echo  $studentName;?></td>
            <td><?php echo    $lastName;?></td>
            <td><?php echo      $gender;?></td>
            </tr>
                  
            <?php
          }
           
          }

      ?>
    </table>
    </form>

    </div>
  </div>
  </div>







    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>