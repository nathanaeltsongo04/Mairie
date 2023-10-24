<?php
require('../classes/linkdb.php');
require('../classes/documents.php');

$data = new documents();
$auteur = $_SESSION['postnom'] . " " . $_SESSION['prenom'];

if (isset($_POST['save'])) {


    try {
        $data->setDESIGNATION($_POST['designation']);
        $data->setDESCRIPTION($_POST['description']);
        $data->setPRIX($_POST['prix']);
        $data->setAuteur($auteur);
        $data->inserer();
        header('location:../documents.php?msg=true&info=Added Successfully');
    } catch (Exception $e) {
        return $e;
    }
} elseif (isset($_GET['supprimer'])) {
    try {
        $data->setCODEDOCUMENT($_GET['id']);
        $data->supprimer();
        header('location:../documents.php?msg=true&info=Deleted Successful');
    } catch (Exception $e) {
        return $e;
    }
} elseif (isset($_POST['update'])) {
    try {
        $data->setCODEDOCUMENT($_POST['id']);
        $data->setDESIGNATION($_POST['designation']);
        $data->setPRIX($_POST['prix']);
        $data->setDESCRIPTION($_POST['description']);
        $data->setAuteur($auteur);
        $data->modifier();
        header('location:../documents.php?msg=true&info=Updated Successfully');
    } catch (Exception $e) {
        return $e;
    }
}
