<?php
require('../classes/linkdb.php');
require('../classes/utilisateurs.php');

$data = new Utilisateurs();
$auteur = $_SESSION['postnom'] . " " . $_SESSION['prenom'];

if (isset($_POST['save'])) {


    try {
        $data->setNOM($_POST['nom']);
        $data->setPOSTNOM($_POST['postnom']);
        $data->setPRENOM($_POST['prenom']);
        $data->setFONCTION($_POST['fonction']);
        $data->setAuteur($auteur);
        $data->inserer();
        header('location:../utilisateurs.php?msg=true&info=Added Successfully');
    } catch (Exception $e) {
        return $e;
    }
} elseif (isset($_GET['supprimer'])) {
    try {
        $data->setCODEUTILISATEUR($_GET['id']);
        $data->supprimer();
        header('location:../utilisateurs.php?msg=true&info=Deleted Successful');
    } catch (Exception $e) {
        return $e;
    }
} elseif (isset($_POST['update'])) {
    try {
        $data->setCODEUTILISATEUR($_POST['id']);
        $data->setNOM($_POST['nom']);
        $data->setPOSTNOM($_POST['postnom']);
        $data->setPRENOM($_POST['prenom']);
        $data->setFONCTION($_POST['fonction']);
        $data->setAuteur($auteur);
        $data->modifier();
        header('location:../utilisateurs.php?msg=true&info=Updated Successfully');
    } catch (Exception $e) {
        return $e;
    }
}
