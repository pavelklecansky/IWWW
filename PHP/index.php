<?php
session_start();
if ($_POST["password"] == "heslo") {
    $_SESSION["isLogged"] = true;
    $_SESSION["loginTime"] = date("h:i:sa");
    $cookie_name = "keepLogin";
    $cookie_value = $_POST["keepLogin"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cestovatelský blog</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive-menu.css">
    <link rel="stylesheet" href="css/responsive-menu.css">
    <link rel="stylesheet" href="css/responsive-content.css">
    <link rel="stylesheet" href="css/responsive-print.css">
    <link rel="stylesheet" href="css/experiments.css">
    <link rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/logo.css">
</head>
<body>

<?php

include "menu.php";

//print("<pre>".print_r($_GET,true)."</pre>");
//print("<pre>".print_r($_POST,true)."</pre>");
//print("<pre>".print_r($_SERVER,true)."</pre>");

$pathToFile = "./page/" . $_GET["page"] . ".php";
if (file_exists($pathToFile)) {
    include $pathToFile;
} else {
    include "./page/main.php";
}


?>


<footer>
    <div>
        <span class="footerHeading">Nejčtenější články</span>
        <ul>
            <li><a href="#">Výlet do karlových varů</a></li>
            <li><a href="#">Návštěva Moskvy</a></li>
            <li><a href="#">Výlet na Filipíny</a></li>
            <li><a href="#">Vánoční trhy v Linzu</a></li>
            <li><a href="#">Listopadové pouštění draka</a></li>
            <li><a href="#">Do práce na kole</a></li>
            <li><a href="#">Návštěva muzea kosmonautiky</a></li>
        </ul>
    </div>

    <div>
        <span class="footerHeading">Nejnovější články</span>
        <ul>
            <li><a href="#">Vánoční trhy v Linzu</a></li>
            <li><a href="#">Výlet do karlových varů</a></li>
            <li><a href="#">Návštěva muzea kosmonautiky</a></li>
            <li><a href="#">Výlet na Filipíny</a></li>
            <li><a href="#">Do práce na kole</a></li>
            <li><a href="#">Listopadové pouštění draka</a></li>
            <li><a href="#">Návštěva Moskvy</a></li>
        </ul>
    </div>


    <div>
        <span class="footerHeading">Zdroje</span>
        <ul>
            <li><a href="https://vzhurudolu.cz">vzhurudolu.cz</a></li>
            <li><a href="https://www.w3schools.com/">W3 schools</a></li>
            <li><a href="https://www.jakpsatweb.cz/">Jak psát web</a></li>
            <li><a href="https://www.youtube.com/watch?v=dtJ6WalLroU&ab_channel=PetrFilip">YouTube</a></li>
            <li><a href="https://www.figma.com/file/fSGSrz1D67kFyoFbPx4nYROU/IWWW?node-id=0%3A1">Figma</a></li>
            <li><a href="http://junior.guru/">Junior Guru</a></li>
        </ul>
    </div>


</footer>

</body>
</html>