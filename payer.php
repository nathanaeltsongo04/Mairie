<?php $title = "Mairie"; ?>

<?php $pageTitle = "Formulaire de Paie"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/payer.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>