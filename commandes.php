<?php $title = "Mairie"; ?>

<?php $pageTitle = "Commandes"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/commandes.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>