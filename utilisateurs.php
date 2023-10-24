<?php $title = "Mairie"; ?>

<?php $pageTitle = "Utilisateurs"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/utilisateurs.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>