<?php

session_start();

if (isset($_GET['reset'])) {
    unset($_SESSION['num_visits']);
}

if (isset($_SESSION['num_visits'])) {
    $_SESSION['num_visits']++;
    $num_visits = $_SESSION['num_visits'];
} else {
    $_SESSION['num_visits'] = 1;
    $num_visits = $_SESSION['num_visits'];
}

if ($num_visits == 5) {
    echo "<p>Thank you for visiting the page a lot.</p>";
}

if ($num_visits == 10) {
    header('Location: congratulations.php');
}

?>
<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
