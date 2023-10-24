<?php $title = "Mairie"; ?>

<?php $pageTitle = "Profile Utilisateur"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/profile.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>