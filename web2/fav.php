<html>
<head><title>Your Favorite</title></head>
<body>

    <?php
        
 if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['dish']) && !empty($_POST['dish'])) {
    echo "Thanks for your selection " . $_POST['username'] . '<br> You really enjoyed ' . $_POST['dish'] . ' <br> - especially with a nice ' . $_POST['color'] . ' wine.';
} else {
    echo 'Please enter your name and select your favorite wine and dish';
}


    ?>

</body>
</html>