<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Last Visited Date-Time</title>
</head>

<body>
    <h1>Last Visited Date-Time</h1>
    <?php
    // Check if the 'last_visited' cookie is set
    if (isset($_COOKIE['last_visited'])) {
        $lastVisited = $_COOKIE['last_visited'];
        echo "<p>Last visited on: $lastVisited</p>";
    } else {
        echo "<p>Welcome! This is your first visit to this page.</p>";
    }

    // Update the 'last_visited' cookie with the current date and time
    $currentDateTime = date("Y-m-d H:i:s");
    setcookie('last_visited', $currentDateTime, time() + (365 * 24 * 3600)); // Cookie valid for 1 year
    ?>
</body>

</html>