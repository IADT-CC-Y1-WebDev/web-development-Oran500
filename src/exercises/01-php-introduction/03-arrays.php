<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/03-arrays.php">View Example &rarr;</a>
    </div>

    <h1>Arrays Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Favorite Movies</h2>
    <p>
        <strong>Task:</strong> 
        Create an indexed array with 5 of your favorite movies. Use a for 
        loop to display each movie with its position (e.g., "Movie 1: 
        The Matrix").
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $movies = ["Jaws", "saw", "Avengers Endgame", "Ant-man", "The lego movie"];

        for($i = 1; $i <= count($movies); $i++){
            echo "<p> Movie $i: ", $movies[$i-1], "</p>";
        }
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Student Record</h2>
    <p>
        <strong>Task:</strong> 
        Create an associative array for a student with keys: name, studentId, 
        course, and grade. Display this information in a formatted sentence.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $studentKeys = [
            "name" => "Oran Phillips",
            "studentId" => "N00255034",
            "course" => "Creative Computing",
            "grade" => "B"
        ];

        echo "The student {$studentKeys['name']} has ID {$studentKeys['studentId']} and is in the course {$studentKeys['course']} with grade {$studentKeys['grade']}"
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Country Capitals</h2>
    <p>
        <strong>Task:</strong> 
        Create an associative array with at least 5 countries as keys and their 
        capitals as values. Use foreach to display each country and capital 
        in the format "The capital of [country] is [capital]."
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $countries = [
            "Ireland" => "Dublin",
            "France" => "Paris",
            "Spain" => "Madrid",
            "Italy" => "Rome",
            "Greenland" => "Nuuk"
        ];

        foreach($countries as $country => $capital){
            echo "<p>$country has the capital $capital </p>";
        }
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Menu Categories</h2>
    <p>
        <strong>Task:</strong> 
        Create a nested array representing a restaurant menu with at least 
        2 categories (e.g., "Starters", "Main Course"). Each category should 
        have at least 3 items with prices. Display the menu in an organized 
        format.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $menu = [
            "Starters" => [
                "garlic bread" => "5.99",
                "Prawn cocktail" => "6.99",
                "wings" => "5.99"
            ],
            "Main Course" => [
                "pizza" => "12.50",
                "lasagne" => "11.50",
                "spagetti bolognese" => "11.0"
            ]
        ];

        foreach($menu as $course => $items){
            echo "<p>". ucfirst($course). " menu items: </p>";
            echo "<ul>";
            foreach($items as $dish => $price){
                echo "<li> $dish\t($price)";
            }
        }
        ?>
    </div>

</body>
</html>
