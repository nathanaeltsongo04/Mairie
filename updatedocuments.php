<?php $title = "Mairie"; ?>

<?php $pageTitle = "Modification Documents"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/updatedocuments.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>