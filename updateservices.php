<?php $title = "Mairie"; ?>

<?php $pageTitle = "Modification Services"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/updateservices.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>