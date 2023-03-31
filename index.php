<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area and circumference of a circle">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- MDL connector -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area and Circumference of a Circle</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Area and Circumference of a Circle</h1>";
?>
<!-- Images -->
    <style>
      * {
        box-sizing: border-box;
      }
      
      .column {
        float: left;
        width: 50%;
        padding: 5px;
      }
      
      /* Clearfix (clear floats) */
      .row::after {
        content: "";
        clear: both;
        display: table;
      }
    </style>
    
    <!-- Area image -->
    <div class="row">
      <div class="column">
        <img src="./images/Area-of-a-Circle-Formula.jpg" alt="Area" style="width:100%" style="height: 75%;"> 
      </div>
      <!-- Circumference image -->
      <div class="column">
        <img src="./images/circumference-circle-formula.png" alt="Circumference" style="width:100%">
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

<?php
echo "<h2>This web page will calculate the area and circumference of a circle.</h2>";
?>
<!-- form to get the radius from the user -->
      <form action="./results.php" method="post" target="results">
        <label for=lblRadius">Radius:</label>
        <input type="number" id="radius" placeholder="Enter the radius" name="radius"><br><br>
        <input type="submit" value="Calculate">
      </form>
      
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        After taxes, your take home salary is $ " + $takeHomeSalary
      </iframe>
    </body>
</html>