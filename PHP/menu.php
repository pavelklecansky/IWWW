<div id="menu">
    <div id="logo"></div>

    <label for="hamburger">&#9776;</label>
    <input type="checkbox" id="hamburger"/>

    <nav>
        <a href="index.php">Úvod</a>
        <a href="index.php?page=experiments">Články</a>
        <a href="index.php?page=contact">Kontakt</a>
        <?php
        if ($_SESSION["isLogged"]) {
            echo '<a href="index.php?page=messageList">Zprávy</a>';
            echo '<a href="index.php?page=logout">Odhlasit</a>';
            echo 'User logged at: ' . $_SESSION["loginTime"];
            echo 'Keep login: ' . $_COOKIE["keepLogin"];
        } else {
            echo '<a href="index.php?page=login">Přihlasit</a>';
        }
        ?>

    </nav>
</div>