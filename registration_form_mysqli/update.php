<?php
include_once 'includes/connect_db.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Option</title>
<link href="styles/update.css" type="text/css" rel="stylesheet">
<body>
  <header>
    <div class="wrap">
      <div class="top-nav">
        <nav id="nav-bar">
          <ul>
            <li><a href="#">View</a></li>
            <li><a class="active" href="update.php">Update</a></li>
            <li><a href="#">Delete</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="wrap">
    <div class="update-table">
      <table>
        <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Password</th>
          <th>Gender</th>
          <th>Birth</th>
        </tr>
        <tr>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <th contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
        </tr>
      </table>
    </div>
  </div>
</body>
</head>
</html>
