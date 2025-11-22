<?php
// read coockies (part 4)
    $name = $_COOKIE["student_name"] ?? "guest";
    $track = $_COOKIE["student_track"] ?? "undecided";


// clear cookies
    if (isset($_GET["clear"])) {
        setcookie("student_name", "", time() - 3600);
        setcookie("student_track", "", time() - 3600);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formdiv">
        <h2>Welcome back, <?php echo htmlspecialchars($name); ?>!</h2>
        <p>Your track is: <strong><?php echo htmlspecialchars($track); ?></strong></p>

        <p>
            Cookies are stored in your browser. You can check them in your browser's <strong>developer tools -> Application -> Cookies</strong> section.
        </p>

        <p>
            <a class="btn" href="details.php?clear=1">Clear Cookies</a>
        </p>
    </div>
</body>
</html>