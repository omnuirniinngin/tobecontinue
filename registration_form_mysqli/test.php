<!DOCTYPE html>
<html>
<head><title>TEST</title></head>
    <body>
        <form method="get">
            <div class = "row-1">
                  <br>
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
                  </select>
                  <br>
                  <button type="submit">Sign up</button>
              </div>
        </form>
                <output>
                    <?php
    
                        $month = ($_GET['month']);
                        $day = ($_GET['day']);
                        $year = ($_GET['year']);
                        $birth = "$month-$day-$year";
                    echo $birth; ?>
                </output>
    
    </body>
</html>