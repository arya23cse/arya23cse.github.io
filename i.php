<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

/*$_SESSION;*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

<body>

</body>

</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
<style>
body {
    margin-top: 50px;
    margin-left: 80px;
    padding: 0;
    background-image: url(background.png);
    background-repeat: repeat;
    background-size: cover;
    height: 100vh;
    position: relative;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 10px;
    overflow: hidden;
}

nav li {
    float: left;
}


nav li a {
    display: block;
    color: #ffffff;
    text-align: center;
    font-size: medium;
    padding: 14px 16px;
    text-decoration: none;
}

nav li a:hover {
    background-color: #e4d7d7;
    color: #000000;
}

.container h1 {
    font-size: 100px;
    /* adjust the font size as desired */
    text-align: center;
    color: #ffffff;
    margin-top: 15%;
    margin-left: 15%;
}

.container h3 {
    font-size: 20px;
    /* adjust the font size as desired */
    text-align: center;
    color: #ffffff;
    margin-top: 1%;
    margin-left: 15%;
}
</style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="resource.html">Resources</a></li>
            <li><a href="symptoms.html">Symptoms</a></li>
            <li><a href="tutorial.html">Tutorials</a></li>
            <li>
                <?php echo '<li></li>' ?>
                <!---->
            </li>
            <li>
                <a href="logout.php">Logout</a>
                <!--<input type="button" value="logout" action="logout.php">-->
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-xl-10">
            <h1>Companion</h1>
            <h3>"Your mental health, with a trusted Companion"</h3>
        </div>
    </div>

</body>

</html>