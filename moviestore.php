<?php

// include files

// include database connection info

include('pdconnect.php');

// define model

 include('PDOtest.php');

?>

<!doctype html>

<html lang="en">

 <head>

    <meta charset="utf-8">

    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movie Store </title>

    <!-- Include bootstrap CSS -->

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Include jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <style> #content {height: 500px;} </style>

 </head>

 <body>

 <!-- page header -->

    <div class='col-xs-12'>

        <h2>Welcome to MovieStore</h2>

    </div>

    <div id='content'><!-- page content -->

      <!-- left column -->

      <div class='col-xs-3'>

        <h3>Links</h3>

         <ul>

                <li><a href='moviestore.php?genre=drama'>Drama movies</a></li>

                <li><a href='moviestore.php?genre=adventure'>Adventure movies</a></li>

      </div>

      <!-- right column: content section -->

      <div class='col-xs-9'>

         <h3>Movie Information</h3>

    <?php

        if (isset($_GET['genre'])){

                $genre = $_GET['genre'];

                displayMovieData($genre);

        }

         function displayMovieData($genre){

                $sql = 'SELECT title, year, type FROM movies WHERE type = :genre';

 

                // get  data

                $data = getAll($sql, $genre);

                displayData($data);

        }

        function displayData($data){

        // use a table to display data

                echo "<table class='table'>";

                for ($i=0; $i<count($data); $i++){

                // each element of $data is an associative array

                        echo "<tr>";

                        foreach ($data[$i] as $key=>$value){

                                echo "<td>{$value}</td>";

                        }

                        echo "</tr>\n";

                }

                echo "</table>";

        } // end function

 

 

    ?>

 

 

      </div>

   </div>

   <div class='col-xs-12'><!-- page footer -->

    <p>&#0169; UWW</p>

   </div>

 

 

</body>

</html>
