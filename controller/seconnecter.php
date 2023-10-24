<?php
require('../classes/linkdb.php');
$con = new Database();
$connect = $con->open();

if (isset($_POST['connecter'])) {
    $nomdutilisateur = $_POST['nomdutilisateur'];
    $password = htmlspecialchars($_POST['password']);
    try {
        $stmt = $connect->prepare("SELECT `CODECOMPTE`,compte.UTILISATEUR as UTILISATEUR , utilisateur.NOM as NOM, utilisateur.POSTNOM as POSTNOM, utilisateur.PRENOM as PRENOM , `NOMUTILISATEUR`, compte.MOTDEPASSE as MOTDEPASSE, service.DESIGNATION as FONCTION FROM `compte`
inner join utilisateur on compte.UTILISATEUR=utilisateur.CODEUTILISATEUR
inner join service on utilisateur.FONCTION=service.CODESERVICE where NOMUTILISATEUR=? AND MOTDEPASSE=?  ");
        $stmt->execute(array($nomdutilisateur, $password));
        $nbre = $stmt->rowCount();

        if ($nbre == 1) {
            $row = $stmt->fetch();

            $_SESSION['CODE'] = (string)$row['CODECOMPTE'];
            $_SESSION["user"] = (string)$row['UTILISATEUR'];
            $_SESSION["nom"] = $row['NOM'];
            $_SESSION["postnom"] = $row['POSTNOM'];
            $_SESSION["prenom"] = $row['PRENOM'];
            $_SESSION["fonction"] = $row['FONCTION'];
            $_SESSION["nomutilisateur"] = $row['NOMUTILISATEUR'];
            $_SESSION["motdepasse"] = $row['MOTDEPASSE'];
            header("Location:../statistiques.php");
        } else {
            header('location:../login.php?msg=true&info=Check Your Username or Your Password');
        }
    } catch (PDOException $e) {
        $erreur = $e->getMessage();
        header("location: ../login.php?msg=False&info= $erreur");
    }
} else {
    header('location:../login.php?msg=true&info=Check Your Username or Your Password');
}
