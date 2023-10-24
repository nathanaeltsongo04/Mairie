<?php $title = "Mairie"; ?>

<?php $pageTitle = "Services"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/services.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>