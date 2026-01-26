<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statements Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/02-statements.php">View Example &rarr;</a>
    </div>

    <h1>Statements Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Age Classifier</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for age. Use if/else statements to classify and 
        display the age group: "Child" (0-12), "Teenager" (13-19), "Adult" 
        (20-64), or "Senior" (65+).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $age = 76;

        if($age < 13){
            echo "$age is a child";
        }
        else if($age < 20){
            echo "$age is a teenager";
        }
        else if($age < 65){
            echo "$age is an adult";
        }
        else{
            echo "$age is a senior";
        }
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Day of the Week</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for the day of the week (use a number 1-7). Use 
        a switch statement to display whether it's a "Weekday" or "Weekend", 
        and the day name.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $weekDay = 1;

        if($weekDay = 1){
            $day = "Monday";
            $weekTime = "weekday";
        }
        else if($weekDay = 2){
            $day = "Tuesday";
            $weekTime = "weekday";
        }
        else if($weekDay = 3){
            $day = "Wednesday";
            $weekTime = "weekday";
        }
        else if($weekDay = 4){
            $day = "Thursday";
            $weekTime = "weekday";
        }
        else if($weekDay = 5){
            $day = "Friday";
            $weekTime = "weekday";
        }
        else if($weekDay = 6){
            $day = "Saturday";
            $weekTime = "weekend";
        }
        else if($weekDay = 7){
            $day = "Sunday";
            $weekTime = "weekend";
        }

        echo "$day $weekTime";
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Multiplication Table</h2>
    <p>
        <strong>Task:</strong> 
        Use a for loop to create a multiplication table for a number of your 
        choice (1 through 10). Display each line in the format "X × Y = Z".
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $tables = 4;

        for($i = 0; $i <= 10; $i++){
            $result = $tables * $i;
            echo "<p>$tables x $i = $result </p>";
        }
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Countdown Timer</h2>
    <p>
        <strong>Task:</strong> 
        Create a countdown from 10 to 0 using a while loop. Display each number, 
        and when you reach 0, display "Blast off!"
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $count = 10;

        while($count >=0){
            if($count > 0){
                echo "<p>$count</p>";
            }
            else{
                echo "Blast off!!";
            }
            $count = $count - 1;
        }
        ?>
    </div>

</body>
</html>
