<?php $title = "Mairie"; ?>

<?php $pageTitle = "Statistique"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/statistiques.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>