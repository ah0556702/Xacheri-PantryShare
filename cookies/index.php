<?php
    setcookie('username', 'blah', time() + 60);
    // DELETE THE COOKIE - EXPIRE IT
    // minus time rather than add to todays time function
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions & Cookies</title>
</head>
<body>
    <a href="retrieve_cookie.php">Retrieve Cookie</a>
</body>
</html>