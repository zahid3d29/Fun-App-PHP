<?php

    // Stop showing Error reporting 
    error_reporting(0);
    ini_set('display_errors', 0);

    $visitorName = $_POST["visitor_name"];
    $visitorDob = $_POST["visitor_dob"];

    // collect month from date, showing information to visitors based on their birth date. 
    
    $fulldate = date('M d Y', strtotime("$visitorDob"));
    $monthOfDate = date(M, strtotime("$visitorDob"));
    $dayOfDate = date(l, strtotime("$visitorDob"));

    $currentDate = date('m/d/y');
    echo "<br>";

    // Get Different between current date and user input date 
    $date1=date_create($currentDate);
    $date2=date_create($visitorDob);
    $howLongAgo=date_diff($date1,$date2);


    // Geting specific year is leap year or not
    $year = $visitorDob;
    $leap = date('L', mktime(0, 0, 0, 1, 1, $year));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="main-body p-5">

    <div class="container p-5">
        <div class="row text-center">
            <div class="col-md-12 p-5 border-right border-dark">
            <h2 class="heading-top"> This is simple fun app to check your Birth day history made by very basic of php </h2>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 m-5">
                <form class="main-form" action="information.php" method="post">
                    <div class="form-group">
                        <label for="usr">Your Name:</label>
                        <input type="text" class="form-control" name="visitor_name" id="visitor_name">
                        <!-- <p id="passwordHelpBlock" class="form-text text-muted"> Write your name here. </p>  -->

                        <label for="example-date-input" class="col-form-label">Date</label>
                        <input class="form-control" type="date"  name="visitor_dob" value="" id="example-date-input">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>

        <?php 
            
            $historicalInfo = '
            <div class="row">
                <div class="col-md-6">
                    <p class="small-title"><b>Day of the Week:</b>' . $dayOfDate . '</p>
                    <p class="small-title"><b>How Long Ago?</b>  <a href="#">' . $howLongAgo->format("%y years, %m month and %d days.") . '</a></p>
                    <p class="small-title"><b>Leap Year:</b> <a href="#">' . ($leap ? 'Yes' : 'No') . '</a></p>
                </div>

                <div class="col-md-6">
                    <p class="small-title"><b>Generation:</b> <a href="#">Millennial</a></p>
                    <p class="small-title"><b>Chinese Zodiac:</b> <a href="#">Horse</a></p>
                    <p class="small-title"><b>Star Sign:</b>  <a href="#">Aquarius</a></p>
                </div>
            </div>
        ';

           
         ?>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php

                    // Input date from visitor, convert date to number and show visitors
                    if( $visitorName && $visitorDob != 0 ){
                       echo "Hey <span class='visitorName'>" . $visitorName . "</span>" . " You were born on: ". "<span class='visitorBdmy'>" .  date('M d Y', strtotime("$visitorDob")) . "</span>" . '. And the day was:' . "<span class='visitorBd'>" . date(l, strtotime("$visitorDob")) . "</span><br>";
                    } else{
                        echo "<h2 class='error_note'>You can't keep Blank any of those above fields</h2>";
                    }

                   
                  if( $visitorName && $visitorDob != 0  ){
                        switch( $monthOfDate ){
                            case "Jan":
                                echo "<br><br><h2 class='heading-common'>What happening in this month: $fulldate </h2><br>
                                <p class='info-text'>It was Tuesday, under the sign of Aquarius (see birth chart on January 29, 1991). The US president was George H. W. Bush (Republican), the UK Prime Minister was Sir John Major (Conservative), Pope St John Paul II was leading the Catholic Church. </p>
                                ";

                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo $historicalInfo;
                                echo "</br></br>";

                            break;

                            case "Feb":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for February Month";
                            break;

                            case "Mar":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for March Month";
                            break;

                            case "Apr":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for April Month";
                            break;

                            case "May":
                                echo "Its May";
                            break;

                            case "Jun":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for June Month";
                            break;

                            case "Jul":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for July Month";
                            break;

                            case "Aug":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for August Month";
                            break;

                            case "Sep":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for September Month";
                            break;

                            case "Oct":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for October Month";
                            break;

                            case "Nov":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for November Month";
                            break;

                            case "Dec":
                                echo "<br><h2 class='heading-common'>Historical Information:</h2><br>";
                                echo "</br></br>";
                                echo "Sorry! No history recorded for December Month";
                            break;

                            default : 
                            echo "<br><h2 class='heading-common'>Please check your input</h2><br>";
                            
                        }

                  }
                    
                ?>

            </div>
        </div>
    </div>

   

    <script src="js/bootstrap.min.js"></script>

</body>
</html>