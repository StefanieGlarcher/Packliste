<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=packlist', 'root', '');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrierung</title>
</head>
<body>

<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script type="text/javascript" language="Javascript"> 
                       alert("Bitte eine gültige E-Mail-Adresse eingeben")
                </script>';
        $error = true;
    }
    if(strlen($passwort) == 0) {
        echo '<script type="text/javascript" language="Javascript"> 
                       alert("Bitte ein Passwort angeben")
                </script>';
        $error = true;
    }
    if($passwort != $passwort2) {
        echo '<script type="text/javascript" language="Javascript"> 
                       alert("Die Passwörter müssen übereinstimmen")
                </script>';
        $error = true;
    }

    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) {
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if($user !== false) {
            echo '<script type="text/javascript" language="Javascript"> 
                       alert("Diese E-Mail-Adresse ist bereits vergeben")
                </script>';
            $error = true;
        }
    }

    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

        $statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));

        if($result) {
            echo '<a href="index.html"></a>';
            $showFormular = false;
        } else {
            echo '<script type="text/javascript" language="Javascript"> 
                       alert("Beim Abspeichern ist leider ein Fehler aufgetreten")
                </script>';
        }
    }
}

//if($showFormular) {
//    ?>
<!---->
<!--    --><?php
//} //Ende von if($showFormular)
//?>

</body>
</html>
