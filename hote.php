<?php $title = "Mairie"; ?>

<?php $pageTitle = "Hôte"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/hote.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>