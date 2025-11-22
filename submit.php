<?php

// my form data 3A
    $name = $_POST["user_name"];   
    $email = $_POST["user_email"];
    $track = $_POST["track_level"];
    $shirt = $_POST["shirt_size"];
    $laptop = isset($_POST["loaner_laptop"]) ? "yes" : "no";

// set cookies 3B
    setcookie("student_name", $name, time() + 60*60*24*7); // 7 days
    setcookie("student_track", $track, time() + 60*60*24*7);

// save to file 3C
    $line = $name . "," . $email . "," . $track . "," . $shirt . "," . $laptop . "\n";
    $file = fopen("registrations.txt", "a");
    fwrite($file, $line);
    fclose($file);


?>

 <!-- Thank you -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formdiv">
        <h2>Thank you, <?php echo htmlspecialchars($name); ?>!</h2>
        <p>You’re registered for the <?php echo htmlspecialchars($track); ?> track.</p>

        <p>
            <a class="btn" href="details.php">Student Details</a> <br><br>
            <a class="btn" href="index.html">Back to Home</a>
        </p>
    </div>
</body>
</html>