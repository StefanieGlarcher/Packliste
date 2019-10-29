<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=packlist', 'root', '');

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];

    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    // Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js"></script>
    <title>Login</title>
</head>
<h1>Login</h1>
<body>

<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post">
    <h3>E-Mail<br></h3>
    <input type="email" size="40" maxlength="250" name="email"><br><br>

    <h3>Dein Passwort<br></h3>
    <input type="password" size="40"  maxlength="250" name="passwort"><br>
    <button type="submit"><strong>Senden</strong></button>
    <p class="message">Sie sind noch nicht registriert?<a href="login.php">Registrieren</a></p>
</form>
</body>
</html>