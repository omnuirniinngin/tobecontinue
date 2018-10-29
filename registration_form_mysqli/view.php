<?php
include_once 'includes/connect_db.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Option</title>
<link href="styles/view.css" type="text/css" rel="stylesheet">
<body>
  <header>
    <div class="wrap">
      <div class="top-nav">
        <nav id="nav-bar">
          <ul>
            <li><a href="#" class="active">View</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="#">Delete</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="wrap" contenteditable="false">
    <form method="post">
      <?php
      $sql = "SELECT * FROM users";
          if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result)>0){
                  echo "<table>";
                  echo "<tr>";
                      echo "<th>ID</th>";
                      echo "<th>Firstname</th>";
                      echo "<th>Lastname</th>";
                      echo "<th>Email</th>";
                      echo "<th>Password</th>";
                      echo "<th>Gender</th>";
                      echo "<th>Birth</th>";
                  echo"</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>". $row['user_id'] . "</td>";
                      echo "<td>". $row['Firstname'] . "</td>";
                      echo "<td>". $row['Lastname'] . "</td>";
                      echo "<td>". $row['Email'] . "</th>";
                      echo "<td>". $row['Password'] . "</td>";
                      echo "<td>". $row['Gender'] . "</td>";
                      echo "<td>". $row['Birth'] . "</td>";
                  echo"</tr>";
              }
                  echo "</table>";
                  mysqli_free_result($result);
              }else{
                  echo "No records match were found.";
              }
          }else{
              echo "ERROR: Could not be able to execute $sql. " . mysqli_error(conn);
          }
      ?>
      <input onclick="change()" type="button" value="Edit" id="editbtn">
    </form>
  </div>
  <script src="scripts/main.js"></script>
</body>
</head>
</html>
