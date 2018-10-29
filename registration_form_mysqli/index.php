<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="styles/style.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div class="wrap">
    <h1>Sign up</h1>
    <h3>It's free and anyone can join.</h3>
    <div class="forms">
      <form action="includes/signup.php" method="post">
      <table cellSpacing="0" cellPadding="3" border="0" style="border-collapse:collapse;">
        <tr>
          <td style="text-align: right;"><label>First name:</label></td>
          <td><input type="text" name="first" required></td>
        </tr>
        <tr>
          <td style="text-align: right;"><label>Last name:</label></td>
          <td><input type="text" name="last" required></td>
        </tr>
        <tr>
          <td style="text-align: right;"><label>Your Email:</label></td>
          <td><input type="text" name="email" required></td>
        </tr>
        <tr>
          <td style="text-align: right;"><label>New Password:</label></td>
          <td><input type="password" name="pwd" required></td>
        </tr>
          
        <tr>
          <td style="text-align: right;"><label>I am:</label></td>
          <td>
            <select name="gender" id="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </td>
        </tr>
      </table>
          <div class = "table-row">
              <table>
                <tr>
                    <td style="text-align: right;"><label>Birth:</label></td>
                    <td>
                      <select id="custom-select" name="month">
                        <option selected="selected" value="none">Month:</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </td>
                    <td>
                      <select id="custom-select" name="day">
                        <option selected="selected" value="none">Day:</option>
                            <?php $i = 1; ?>
                            <?php while ($i<=31) : ?>
                        <option value="<?php echo $i; ?>/">
                            <?php echo $i; ?></option>
                          <?php $i++; ?>
                          <?php endwhile ?>
                      </select>
                    </td>
                    <td>
                    <select id="custom-select" name="year">Year:
                          <option selected="selected" value="none">Year:</option>
                          <?php $i = 1900; ?>
                          <?php while ($i<=2018) : ?>

                      <option value="<?php echo $i; ?>">
                          <?php echo $i; ?></option>
                          <?php $i++; ?>
                          <?php endwhile ?>
                      </select>
                    </td>
                </tr>
              </table>
              <!--
            <label>Birth:</label>
              <select id="custom-select" name="month">
                <option selected="selected" value="none">Month:</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <select id="custom-select" name="day">
                <option selected="selected" value="none">Day:</option>
                    <?php $i = 1; ?>
                    <?php while ($i<=31) : ?>
                <option value="<?php echo $i; ?>/">
                    <?php echo $i; ?></option>
                  <?php $i++; ?>
                  <?php endwhile ?>
              </select>
              <select id="custom-select" name="year">Year:
                  <option selected="selected" value="none">Year:</option>
                  <?php $i = 1900; ?>
                  <?php while ($i<=2018) : ?>
              
              <option value="<?php echo $i; ?>">
                  <?php echo $i; ?></option>
                  <?php $i++; ?>
                  <?php endwhile ?>
              </select> -->
              <br>
              <button type="submit">Sign up</button>
          </div>
      </form>
    </div>

  </div>
</body>

</html>
