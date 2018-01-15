<?php
session_start();
$users = array(
    "Bob" => array("pwd" => "12345", "rol" => "Administrator"),
    "Klaas" => array("pwd" => "12345", "rol" => "Gebruiker"),
    "Truus" => array("pwd" => "12345", "rol" => "Administrator")
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST["knop"])){
    if (isset($users[$_POST["login"]])
        && $users[$_POST["login"]]["pwd"] == $_POST["pwd"]) {
        $_SESSION["users"] = array("naam" => $_POST["login"], "pwd" => $users[$_POST["login"]]["pwd"],
            "rol" => $users[$_POST["login"]]["rol"]);
        $message = "Welkom ".$_SESSION["users"]["naam"]." met de rol ".$_SESSION["users"]["rol"];
    } else {
        $message = "Sorry, geen toegang!";
    }
} else {
    $message = "Inloggen";
}

print_r($_SESSION);


?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>

<p><a href="Website.php?loguit">Website</a><p>
<p><a href="Pagina.php">Admingedeelte website</a><p>
<p><a href="Admin.php?loguit">Uitloggen</a><p>
</body>
</html>