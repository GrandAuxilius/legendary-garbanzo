<?php
    if(isset($_COOKIE['username'])){
        echo 'User and Password Field is set<br>';
       } else {
        echo 'User and Password Field is not set';
       }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Still Logged In</title>
</head>
<body>
    You are still logged in...
</body>
</html>